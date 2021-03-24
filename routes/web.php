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

Route::get('variable/{prenom}/{nom}', function ($prenom,$nom) {
    return view('welcome', compact('prenom','nom'));
});

Route::get('/coucou/about/{fruit?}', function ($fruit = "pas de fruit") {
    // $fruit = 'groseille';
    return view('pages/about', compact('fruit'));
});

Route::get('/coucou/contact', function () {
    $nom = 'peiffer';
    $prenom= 'louise';
    $telephone='0493881931';
    return view('pages/contact', compact('nom','prenom','telephone'));
});