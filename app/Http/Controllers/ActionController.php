<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ActionController extends Controller
{


    public function index()
    {
        return view('products');
    }


    public function action(Request $request)
    {
        $product = new Product();
        $product->item = $request->item;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discount = 5;
        $product->tax = 10;
        $product->save();
    }
}
