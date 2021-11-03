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
        // Passing data using compact(You can pass multiple data)
        // return view('index', compact('title', 'para'));

        // Passing data using with (You can only pass single data)
        // return view('index')->with('title', $title);

        // passing array using  with
        return view('index')->with('data', $data);

    }
    public function show($value){
        // Array
        $data= [
            "title"=>"Hello From Controller",
            "para"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt, aperiam illo accusamus repellendus, voluptate alias, ad quaerat exercitationem quisquam impedit totam dolorem est? Porro sed sapiente veniam est quod."
        ];
        // Method 1
        $item = $data[$value] ?? 'Here '.$value.' does not exists';
        return view('show')->with('item', $item);

        // Method 2
        // passing one key's value using variable contents
        
        // return view('show', [
        //     'contents'=>$data[$value],
        // ]);
    }
}
