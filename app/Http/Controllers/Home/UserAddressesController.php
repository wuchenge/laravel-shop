<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;

class UserAddressesController extends Controller
{
    /**
     * 收货地址列表
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }

    /**
     * 创建收货地址
     * @return [type] [description]
     */
    public function create()
    {
        return view('user_addresses.create_and_edit', ['address' => new UserAddress()]);
    }

    /**
     * 收货地址存储
     * @param  UserAddressRequest $request [description]
     * @return [type]                      [description]
     */
    public function store(UserAddressRequest $request)
    {
        $request->user()->addresses()->create($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('user_addresses.index');
    }
}
