<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navList = ["Donna", "Uomo", "Bambini"];
    $headerIcons = ["fa-regular fa-user", "fa-regular fa-heart", "fa-solid fa-bag-shopping"];

    $data = [
        "navList" => $navList,
        "headerIcons" => $headerIcons,
    ];
    return view('welcome', $data);
});
