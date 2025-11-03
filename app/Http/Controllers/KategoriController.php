<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $title = 'Index';
        return view('kategori', compact('title'));
    }

    public function create()
    {
        $title = 'Create';
        return view('kategori', compact('title'));
    }

    public function edit()
    {
        $title = 'Edit';
        return view('kategori', compact('title'));
    }
}
