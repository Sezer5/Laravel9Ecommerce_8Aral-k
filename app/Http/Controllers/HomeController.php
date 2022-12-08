<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }

    public function test(){
        return view('home.test');
    }

    public function param($id,$num){
       // echo "Parameter 1 is :",$id;
       // echo "Name is :", $num;

        return view('home.test2',
            [
                'id' => $id,
                'num'=> $num
            ]);
    }

    public function save(Request $request){
        echo "index function!<br>";
        echo "name",$_REQUEST["fname"];
        echo "name",$_REQUEST["lname"];


    }
}
