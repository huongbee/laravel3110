<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foods;
use App\PageUrl;

class ElequentModelController extends Controller
{
    function index01(){
        // $data = Foods::get();
        // //$data = Foods::all();

        // foreach($data as $food){
        //     echo $food->name;
        //     echo "<br>";
        // }
        // $data = Foods::where([
        //     ['price','>=',50000],
        //     ['price','<=',100000]
        // ])->get();
        // $data = Foods::whereBetween('price',[50000,100000])
        //                 ->get();

        // $data = Foods::select('name as tenmon','detail','price')
        //                 ->orderBy('price','DESC')
        //                 ->limit(10)
        //                 ->offset(0) //vi tri lay 10 data
        //                 ->get();
        
        // $data = Foods::selectRaw('avg(price) as dgtb')
        //                 ->first();
        // echo "DON GIA: ".ceil($data->dgtb);

        
        // $data = PageUrl::with('foods')
        //     ->where([
        //         ['id','<',8]
        //     ])->get();

        // foreach($data as $d){
        //     echo $d->url;
        //     echo '-----------';
        //     echo $d->foods->name;
        //     echo "<hr>";
        // }

        // $data = Foods::with('pageUrl')
        //             ->where([
        //                 ['id','<',8]
        //             ])->get();
        // foreach($data as $d){
        //     echo $d->name;
        //     echo '-----------';
        //     echo $d->pageUrl->url;
        //     echo "<hr>";
        // }

        $data = \App\FoodType::with('foods')->get();

        dd($data);
    }
}
