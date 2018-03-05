<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    //echo $_GET['id'];
    echo "Hello Class";
})->name('home_page');

Route::get('/home-{id}-{name?}',function($mssv,$ten="KP Training"){
    //echo $_GET['id']; false
    echo $mssv;
    echo "<br>";
    echo $ten;
    echo "<br>";
    echo "Hello Class 2";
})->where([
    'id'=>'[0-9]+',
    'name'=>'[a-zA-Z-]*'
])->name('home_with_param');

Route::get('call-route-demo',function(){
    //return redirect()->route('home_page');

    return redirect()->route('home_with_param',[
        'id'=>12345678,
        'name'=>'KhoaPhamTraining'
    ]);
});

Route::post('/home',function(){
    echo "Home ";
});


Route::get('trang-chu','HomeController@getHome');

Route::get('chi-tiet-san-pham/{id}/{alias}','HomeController@getDetail');

Route::get('login/{username}',[
    'uses'=>'HomeController@getLogin',
    'as'=>'login_route', // name route
    'where'=>[
        'username'=>'[a-z]+'
    ]
]);

Route::resource('photo','PhotoController');