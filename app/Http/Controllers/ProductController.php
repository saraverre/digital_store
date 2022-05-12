<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $user = Auth::user();
        $product = Product::create([
            'article_number' => $request->article_number,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->file('image')->store('public/media/products')
        ]);

        return redirect(route('products.list'))->with('message', Auth::user()->name . ', the product was saved.');
    }

    public function list()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('products.list', compact('products'));
    }

    public function get_price(Request $request)
    {
        $product_id = $request->id;
        $product = Product::where('id', $product_id)->first();
        $price = $product->price;
        return ['price' => $price];
    }
}
