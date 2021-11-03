<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return 'Hello From controller';
        $title = "Hello From Controller";
        $para = 
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt, aperiam illo accusamus repellendus, voluptate alias, ad quaerat exercitationem quisquam impedit totam dolorem est? Porro sed sapiente veniam est quod.";
        $data= [
            "title"=>"Hello From Controller",
            "para"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt, aperiam illo accusamus repellendus, voluptate alias, ad quaerat exercitationem quisquam impedit totam dolorem est? Porro sed sapiente veniam est quod."
        ];
        // Passing data using compact
        // return view('index', compact('title', 'para'));

        // Passing data using with (You can only pass single data)
        // return view('index')->with('title', $title);

        // passing array using  with
        return view('index')->with('data', $data);

    }
}
