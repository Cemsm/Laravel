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

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get ('/', 'PagesController@index');

Route::get ('/about-us','PagesController@aboutUs');



Route::get('/products' , function(){

$products=DB::table('newtable')
->orderBy('name','asc')
->get();

return view('products.index',compact('products'));

});


Route::get('/products/{id}',function($id){

$product = DB::table('newtable')
->find($id);
return view('products.show',compact('product'));

});



