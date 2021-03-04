<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $product =  Product::create([
            'title' => $request->title,
            'image' => 'original.jpg'
        ]);

        return $product;
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return 'success';
    }
}
