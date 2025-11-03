<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $title = 'Index';
        return view('produk', compact('title'));
    }

    public function create()
    {
        $title = 'Create';
        return view('produk', compact('title'));
    }

    public function edit()
    {
        $title = 'Edit';
        return view('produk', compact('title'));
    }
}
