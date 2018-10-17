<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()->where('on_sale', true)->paginate(16);

        return view('products.index', ['products' => $products]);
    }
}
