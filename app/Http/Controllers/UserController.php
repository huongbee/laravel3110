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

    function getRegisterForm(){
        return view('register');
    }

    function getHomePage(){
        //return view('pages/home');
        return view('pages.home');
    }

    function postRegister(Request $req){
        //echo $_POST['fullname'];
        // echo $req->fullname;
        // echo $req->password;
        // echo $req->input('password');

        // $data = $req->all();
        // echo "<pre>";
        // print_r($data);
        // echo '</pre>';

        // $name = $req->input('fullname','123456');
        // echo $name;

        // $name = $req->fullname;
        // print_r($name);

        //echo $req->input('fullname.1');

        /*
        name: bắt buộc, max:50
        email: bắt buộc, max:50,unique: required|max:50|unique:users,email,admin@gmail.com
        password: bắt buộc, min:6 - max: 20
        password_confirm: bắt buộc, same password
        address: bắt buộc
        phone: bắt buộc, number
        age: 20-80
        */
        $validator = $req->validate([
            'fullname'=>'required|max:50',
            'email'=>'requied|max:50',
            'password'=>'required|min:6|max:20',
            'password_confirm'=>'required|same:password',
            'address'=>'required',
            'phone'=>'required|numeric',
            'age'=>'between:20,80'
        ]);

        $data = $req->all();
        echo "<pre>";
        print_r($data);
        echo '</pre>';


    }
}
