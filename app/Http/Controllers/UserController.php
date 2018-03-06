<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getLoginForm(){
        $userName = "admin";
        $password = '1234567';

        $arr = [
            'mon1'=>'PHP',
            'mon2'=>'MEAN',
            'mon3'=>'Android',
            'mon4'=>'iOS'
        ];

        //return view('login', compact('userName','password')); //c1
        return view('login', [
            'user_name'=>$userName,
            'password'=>$password,
            'arr' => $arr
        ]);

    }
}
