<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-shatil', function () {
    return view('hello-shatil');
});


 Route::get('/greeting', function () {
    return 'Hello Route!!!';
});

// Route::get('/login', function () {
//     return response("<h1>Hello </h1>",200,

// ["Content-type" => "text/plain"]);
// }); 

// using any method

Route::any('/greeting', function () {
    return response(content: "<h1>HIIIIII</h1>", status:200)->header(key: "exampleheader", values: "abc");
});

// using Redirect method 

Route::redirect('/here', '/there');

Route::get('/there', function (){

return "Redirected to THERE!!!!";


});

// View routes and passing values


Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route Parameters

Route::any('/delete/{user_id}', function ($user_id) {
    return $user_id;
})->where('user_id', '[0-9]+');

// Named Route

Route::get('/', function () {
    return view('welcome');
})->name("home");