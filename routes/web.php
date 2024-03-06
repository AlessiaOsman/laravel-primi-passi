<?php

use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\text;

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
    $laravelPage = 'Laravel';
    $phpPage = 'Php';
    $sqlPage = 'Sql';
    $vuePage = 'Vue';
    $title = 'Benvenuti su Boolean';
    $links = [
        ['text' => 'Laravel', 'route' => $laravelPage],
        ['text' => 'Php', 'route' => $phpPage],
        ['text' => 'Sql', 'route' => $sqlPage],
        ['text' => 'Vue', 'route' => $vuePage],

    ];
    return view('home', compact('title', 'links'));
}) -> name('Home');

Route::get('/laravel', function () {
    $name = 'Laravel';
    return view('laravel.laravel', compact('name'));
}) -> name('Laravel');

Route::get('/Php', function () {
    $name = 'Php';
    return view('php.php', compact('name'));
}) -> name('Php');

Route::get('/Sql', function () {
    $name = 'Sql';
    return view('sql.sql', compact('name'));
}) -> name('Sql');

Route::get('/Vue', function () {
    $name = 'Vue';
    return view('vue.vue', compact('name'));
}) -> name('Vue');




