<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $data = 'Yunesh';
        return view('homepage')->with('data', $data);
    }
    public function aboutpage(){
        return view('aboutpage');
    }
}
