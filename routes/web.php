<?php

use Illuminate\Support\Facades\Route;

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

    $comics = config("comics");

    return view('home', ["comics"=>$comics]);

})->name('homepage');

Route::get('/comics-details/{id}', function ($id) {

    $comics = config("comics");
    $comics_to_show = false;

    foreach($comics as $comic) {
        if($comic['id'] == $id) {
            $comics_to_show = $comic;
        }
    }

    if(!$comics_to_show) {
        abort('404');
    }

    $data = [
        'comics_info' => $comics_to_show
    ];

    return view('comics-details', $data);

})->name('comics-details');