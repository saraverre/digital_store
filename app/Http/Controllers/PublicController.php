<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $products = Product::orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('home', compact('products'));
    }
}
