<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/hello', function () {
    //abort(404);
    return 'hello Wolrd!';
});

Route::get('/stu', "StuController@index");

//路由带参
Route::get("/test/{id?}", function ($id=null) {
    return "Hello world ".$id;
})->where("id","[0-9a-zA-Z]+");

//路由命名
Route::get('/demo',['as'=>'mydemo', function () {
    echo "当前请求".route('mydemo')."<br/>";
    $name = Route::currentRouteName();
    echo "当前请求路由名称".$name."<br/>";
    return "Hello Demo";
}]);
*/

Route::resource('/stu', "StuController");

Route::get('/test', function () {
    return "Hello Test!";
});
//请求实例
Route::get('/demo1', "DemoController@request");
