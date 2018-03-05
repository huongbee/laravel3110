<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getHome(){
        echo $_GET['name'];
        echo "HomeController - getHome";
    }

    function getDetail($id,$alias){
        //echo $_GET['id'];
        // echo $id;
        // echo $alias;
        return redirect()->route('home_with_param',[
            'id'=>$id,
            'name'=>$alias
        ]);
    }

    function getLogin(){
        echo "Login page";
    }
    
}
