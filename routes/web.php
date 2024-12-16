<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return "Hello World";
});


Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('name',function(){
    return view('pages.name');
});

Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is user '.$name. ' with an id of '.$id;
});


