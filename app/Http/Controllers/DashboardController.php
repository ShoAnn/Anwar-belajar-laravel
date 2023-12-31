<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.static.home', [
            'categories' => ProductCategory::with('product')->get(),
            'products' => Product::with('inventory')->get(),
        ]);
    }
}
