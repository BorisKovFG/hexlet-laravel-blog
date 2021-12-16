<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('team', [ArticleController::class, 'team'])->name('articleTeam');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::patch('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

