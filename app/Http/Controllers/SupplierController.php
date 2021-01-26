<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('suppliers.index');
    }
    public function edit(Request $request)
    {
        return view('suppliers.edit');
    }
    public function add()
    {
        return view('suppliers.add');
    }
}
