<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        return view('home');
    }
    public function welcome(Request $request)
    {
        $first_name = $request->first_name;
        $last_name =$request->last_name;
        return view('home', ['first_name' => $first_name, 'last_name' => $last_name]);
    }
}
