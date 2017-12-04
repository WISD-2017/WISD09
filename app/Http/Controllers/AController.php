<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AController extends Controller
{

    public function A1(Request $request)
    {
        return view('a1');
    }

    public function A2(Request $request)
    {
        return view('a2');
    }

}
