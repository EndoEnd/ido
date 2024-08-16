<?php

use Illuminate\Support\Facades\Route;

/* '/' ルート
Route::get('/', function () {
    return view('login');
});*/

// ログインページ
Route::get('/login', function () {
    return view('login');
});

// 登録ページ
Route::get('/registration', function () {
    return view('registration');
});
