<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foods;

class ElequentModelController extends Controller
{
    function index01(){
        $data = Foods::get();
        //$data = Foods::all();

        foreach($data as $food){
            echo $food->name;
            echo "<br>";
        }
        //dd($data);
    }
}
