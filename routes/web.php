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
    $posts = App\Post::all();
    $Soups = App\Soups::all();
    $salads = App\Salad::all();
    $rices = App\Rice::all();
    $breads = App\Bread::all();
    $snacks = App\Snack::all();
    $drinks = App\Drink::all();
    $notifications = App\Notification::all();
    return view('welcome', compact('posts', 'Soups', 'salads', 'rices', 'breads', 'snacks', 'drinks', 'notifications'));
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
