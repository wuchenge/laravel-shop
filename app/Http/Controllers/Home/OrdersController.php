<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use App\Models\Order;
use App\Services\OrderService;
use App\Http\Requests\OrderRequest;

class OrdersController extends Controller
{
    /**
     * 创建订单
     * @param  OrderRequest $request      [description]
     * @param  OrderService $orderService [description]
     * @return [type]                     [description]
     */
    public function store(OrderRequest $request, OrderService $orderService)
    {
        $user    = $request->user();
        $address = UserAddress::find($request->input('address_id'));

        return $orderService->store($user, $address, $request->input('remark'), $request->input('items'));
    }

    /**
     * 订单列表
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        $orders = Order::query()
            // 使用 with 方法预加载，避免N + 1问题
            ->with(['items.product', 'items.productSku'])
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('orders.index', ['orders' => $orders]);
    }

    /**
     * 订单详情
     * @param  Order   $order   [description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function show(Order $order, Request $request)
    {
        $this->authorize('own', $order);
        return view('orders.show', ['order' => $order->load(['items.productSku', 'items.product'])]);
    }

    /**
     * 确认收货
     * @param  Order   $order   [description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function received(Order $order, Request $request)
    {
        // 校验权限
        $this->authorize('own', $order);

        // 判断订单的发货状态是否为已发货
        if ($order->ship_status !== Order::SHIP_STATUS_DELIVERED) {
            throw new InvalidRequestException('发货状态不正确');
        }

        // 更新发货状态为已收到
        $order->update(['ship_status' => Order::SHIP_STATUS_RECEIVED]);

        // 返回原页面
        return $order;
    }
}
