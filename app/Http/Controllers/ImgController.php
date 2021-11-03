<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgController extends Controller
{
    public function index()
    {
        return view('testimg');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
