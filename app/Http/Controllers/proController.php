<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proController extends Controller
{

    public function product()
    {
        return view('product');
    }
    public function productPost(Request $request)
{

}

}
