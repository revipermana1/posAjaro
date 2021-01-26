<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function edit(Request $request)
    {
        return view('products.edit');
    }
    public function add()
    {
        return view('products.add');
    }
}
