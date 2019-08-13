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


Route::get("/formulir", 'Formulir@formulir');
Route::get("/formulir/edit", 'Formulir@formulirEdit');
Route::post("/formulir/editmasuk", "Formulir@formulirEditMasuk");
Route::get("/hapus", "Formulir@hapus");
Route::post("/formulir_input", "Formulir@masukkan");

Route::get("/test", function(){
    return view("test", ["data"=>100]);
});
