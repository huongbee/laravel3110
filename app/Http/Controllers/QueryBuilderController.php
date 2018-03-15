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
    

    function index03(){
       /* $data = DB::table('foods')
                ->select(
                    'foods.*',
                    'foods.name as tenmon',
                    'food_type.name as tenloai'
                )
                ->join( 'food_type',
                        'foods.id_type',
                        '=',
                        'food_type.id'
                )
                ->get();
        */
        /*
        $data = DB::table('foods')
                ->select(
                    'quantity',
                    'bill_detail.price',
                    'foods.name as tenmon',
                    'food_type.name as tenloai'
                )
                ->join( 'food_type',
                        'foods.id_type',
                        '=',
                        'food_type.id'
                )
                ->join( 'bill_detail',
                        'bill_detail.id_food',
                        '=',
                        'foods.id'
                )
                //->where('quantity',1)
                ->where([
                    [
                        'bill_detail.price',
                        '>',
                        25000
                    ],
                    [
                        'quantity',
                        '<>',
                        3
                    ]
                ])
                ->get();
        */
        
        // $data = DB::table('foods')
        //         ->select(
        //             'quantity',
        //             'bill_detail.price',
        //             'foods.name as tenmon',
        //             'food_type.name as tenloai'
        //         )
        //         ->join('food_type',function($join){
        //             $join->on(
        //                 'foods.id_type',
        //                 '=',
        //                 'food_type.id'
        //             );
        //         })
        //         ->join('bill_detail',function($join){
        //             $join->on(
        //                 'foods.id',
        //                 '=',
        //                 'bill_detail.id_food'
        //             );
        //             // $join->where([
        //             //     ['quantity','<>',3],
        //             //     ['bill_detail.price','>',25000]
        //             // ]);
        //         })
        //         ->where([
        //             ['quantity','<>',3],
        //             ['bill_detail.price','>',25000]
        //         ])
        //         ->get();
        // dd($data);

        // DB::table('bill_detail')->insert([
        //     'id_bill'=>3,
        //     'id_food'=>2,
        //     'quantity'=>3,
        //     'price'=>30000
        // ]);
        // DB::table('bill_detail')
        // ->where('id',16)
        // ->update([
        //     'id_bill'=>3,
        //     'id_food'=>2,
        //     'quantity'=>3,
        //     'price'=>100000
        // ]);
        DB::table('bill_detail')
        ->where('id',16)
        ->delete();
        echo "deleted!";
    }
}
