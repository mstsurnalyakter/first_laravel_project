<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
// Route::get('', function () {
//     return "Hello World";
// });


// Route::get('/hello', function () {
//     return "<h1>Hello World</h1>";
// });

// Route::get('name',function(){
//     return view('pages.name');
// });

// Route::get('/users/{id}/{name}',function($id,$name){
//     return 'This is user '.$name. ' with an id of '.$id;
// });

// Route::get('about', function () {
//     return view('pages.about');
// });



// controller used
Route::get('/',[PagesController::class,'index']);
Route::get('service',[PagesController::class,'service']);
Route::get('about',[PagesController::class,'about']);

Route::resource('posts',PostController::class);