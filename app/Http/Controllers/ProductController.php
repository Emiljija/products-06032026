<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show() {
        $data = Product::all();
        return view('index', ['data' => $data]);
    }
}
