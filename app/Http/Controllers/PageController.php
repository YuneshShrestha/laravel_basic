<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $data = ['Ram','Gita', 'Sita'];
        return view('homepage',[
            'data'=>$data
        ]);
    }
    public function aboutpage(){
        return view('aboutpage');
    }
}
