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
        return "A + B = " .  $a + $b;
    }


    public function city()
    {
        $citys = ['Uzbekistan', 'Russian', 'Belarus'];
        $s = $citys;
        sort($citys);
        return view('forma', ['city' => $citys, 'citys' => $s]);
    }

    public function inputCities(Request $request)
    {
        $n = $request->input('number');
        return view('input_cities', ['n' => $n]);
    }

    public function inputN()
    {
        return view('inputn');
    }

    public function showCities(Request $request)
    {
        //dd($request);
        $citys = $request->input('city');
        //dd($city);
        //$citys = [];
        //array_push($citys, $city);
        $s = $citys;
        sort($citys);
        return view('forma', ['city' => $citys, 'citys' => $s]);
    }
}
