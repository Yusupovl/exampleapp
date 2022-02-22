<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        dd($request);
        return $request->input('a');
    }

    public function form()
    {
        return view('forma');
    }

    public function sum(Request $request)
    {

        $a = $request->input('number1');
        $b = $request->input('number2');
        return "A + B" .  $a + $b;
    }
}
