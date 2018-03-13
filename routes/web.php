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

// Route::get('/home',function(){
//     //echo $_GET['id'];
//     echo "Hello Class";
// })->name('home_page');

// Route::get('/home-{id}-{name?}',function($mssv,$ten="KP Training"){
//     //echo $_GET['id']; false
//     echo $mssv;
//     echo "<br>";
//     echo $ten;
//     echo "<br>";
//     echo "Hello Class 2";
// })->where([
//     'id'=>'[0-9]+',
//     'name'=>'[a-zA-Z-]*'
// ])->name('home_with_param');

// Route::get('call-route-demo',function(){
//     //return redirect()->route('home_page');

//     return redirect()->route('home_with_param',[
//         'id'=>12345678,
//         'name'=>'KhoaPhamTraining'
//     ]);
// });

// Route::post('/home',function(){
//     echo "Home ";
// });


// Route::get('trang-chu','HomeController@getHome');

// Route::get('chi-tiet-san-pham/{id}/{alias}','HomeController@getDetail');

// Route::get('login/{username}',[
//     'uses'=>'HomeController@getLogin',
//     'as'=>'login_route', // name route
//     'where'=>[
//         'username'=>'[a-z]+'
//     ]
// ]);

// Route::resource('photo','PhotoController');

Route::get('user/login',[
    'uses'=>'UserController@getLoginForm',
    'as'=>'user_login'
]);


Route::get('user/register',[
    'uses'=>'UserController@getRegisterForm',
    'as'=>'user_register'
]);

Route::post('user/register',[
    'uses'=>'UserController@postRegister',
    'as'=>'user_register'
]);

Route::get('home',[
    'uses'=>'UserController@getHomePage'
]);

Route::get('upload-file',[
    'uses'=>'UserController@getFormUpload',
    'as'=>'upload_file'
]);
Route::post('upload-file',[
    'uses'=>'UserController@postUpload',
    'as'=>'upload_file'
]);


Route::get('detail','UserController@getDetail');
Route::get('type','UserController@getType');


Route::get('create-table-demo',function(){
    Schema::create('customers',function($table){
        $table->increments('id');
        $table->string('name',50);
        $table->string('email',100)->unique();
        $table->date('birthdate');
        $table->boolean('status')->default(false);  
        $table->timestamps(); //created_at & updated_at
    });
    echo "Created";
});

Route::get('modify-table-demo',function(){
    Schema::table('customers',function($table){
        $table->string('addess',200);
    });
    echo "Updated";
});

//rename name->fullname
//drop column address
Route::get('modify-table-demo02',function(){
    Schema::table('customers',function($table){
        //$table->string('name',100)->change();
        $table->renameColumn('name', 'fullname');
        $table->dropColumn('addess');
    });
    echo "Updated";
});

//create table bills
//tạo foreign key
Route::get('create-table-bills',function(){
    Schema::create('bills',function($t){
        $t->increments('id');
        $t->integer('customer_id')->unsigned();
        $t->double('price',10,0);

        $t->foreign('customer_id')
          ->references('id')
          ->on('customers');

    });
    echo "Created.";
});

//drop table