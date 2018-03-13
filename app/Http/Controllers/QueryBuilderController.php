<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class QueryBuilderController extends Controller
{
    // Liệt kê danh sách sản phẩm
    function index01(){
        $foods = DB::table('foods')->get();
        dd($foods);
    }
    function index02(){
        // $foods = DB::table('foods')
        //         ->select('name','price','image')
        //         ->get();

        // $foods = DB::table('foods')
        //         ->where('id',1)
        //         ->first();
        // echo $foods->name;

        // $foods = DB::table('foods')
        //         ->where('id',1)
        //         ->value('name');
        // echo $foods;

        // $foods = DB::table('foods')->pluck('name');
        // foreach($foods as $name){
        //     echo $name;
        //     echo "<br>";
        // }


        // $foods = DB::table('foods')
        //         ->where([
        //             ['price','>',30000],
        //             ['id','>',60]
        //         ])
        //         ->get();

        // $foods = DB::table('foods')
        //         ->where([
        //             ['id','>',60]
        //         ])
        //         ->orWhere('id',1)
        //         ->get();

        // $foods = DB::table('foods')
        //         ->whereBetween('price',[50000,100000])
        //         ->get();


        $count = DB::table('foods')->where([['id','<',30]])->count();
        echo $count;

    }
    
}
