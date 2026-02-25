<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Product;
use App\Models\products;

class ProductController extends Controller
{
    
    public function search(Request $request)
{
    $search = $request->search;

    $products = products::where('name', 'like', "%{$search}%")
                       ->orWhere('description', 'like', "%{$search}%")
                       ->get();

    return view('produtos', compact('products'), ['search' => $search]);
}
}
