<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SitesController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function about(){
//        $name="chendongpu";
//        $age=30;
//        return view('site.chen')->with(["name"=>$name,"age"=>$age]);

        $name="chendongpu";
        $age=30;
        return view('site.chen',compact('name','age'));
    }

    public function contact(){
        $peoples = ["zhang","wang","Li"];
        return view('site.contact',compact('peoples'));
    }
}
