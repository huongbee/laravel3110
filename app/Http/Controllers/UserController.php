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
        email: bắt buộc, type:email, max:50,unique: required|max:50|unique:users,email,admin@gmail.com
        password: bắt buộc, min:6 - max: 20
        password_confirm: bắt buộc, same password
        address: bắt buộc
        phone: bắt buộc, number
        age: 20-80
        */
        $check = [
            'fullname'=>'required|max:50',
            'email'=>'required|max:50|email',
            'password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:password',
            'address'=>'required',
            'phone'=>'required|numeric',
            'age'=>'between:2,10' //min:20,max:80
        ];
        $mess = [
            'fullname.required'=>'Vui lòng nhập họ tên',
            'fullname.max'=>'Họ tên không quá :max kí tự',
            'password.min'=>'Password ít nhất :min kí tự'
        ];
        $validator = $req->validate($check,$mess);

        if($validator->fails()) {
            return redirect('user_register')
                        ->withErrors($validator)
                        ->withInput();
        }
        //ko co err, luu user
        $data = $req->all();
        echo "<pre>";
        print_r($data);
        echo '</pre>';

        return redirect()->route('user_login')
                        ->with('message','Successfully, Plz login');

                        //->with(['message'=>'Successfully, Plz login',
                        //         'level'=>'success'
                        //       ])


    }

    function getFormUpload(){
        return view('upload_file');
    }

    function postUpload(Request $req){
        //kiem tra file size //<=100kb
        //file type ['png','jpg','gif']
        //rename
        if($req->hasFile('image')){
            $file = $req->file('image');
            
            if($file->getSize() > 102400){
                echo "File too large! Choose again!";
                return;
            }
            $arrExt = ['png','jpg','gif'];
            $ext = $file->getClientOriginalExtension();
            if(!in_array($ext,$arrExt)){
                echo "Dot not choose this file type.";
                return;
            }
            
        }
        else{
            echo "File not found!";
        }
    }
}
