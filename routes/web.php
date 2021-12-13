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

$team = [
    ['name' => 'Hodor', 'position' => 'programmer'],
    ['name' => 'Joker', 'position' => 'CEO'],
    ['name' => 'Elvis', 'position' => 'CTO'],
];


Route::get('/', function () {
    return view('welcome2');
});

Route::get('/about', function () use ($team) {
    $articles = App\Models\Article::all();
    return view('about', ['team' => $team, 'articles' => $articles]);
})->name('about');
//Route::get('/', function () {
//    return "Hello, World!";
//});

