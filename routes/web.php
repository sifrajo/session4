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
    return view('home');
});

Route::get('/tentang', function(){
    return view('tentang');
});

Route::get('/kontak', function(){
    return view('kontak');
});


Route::get('/mahasiswa', function(){
    $nama = 'Glenys';
    $nilai = 100;
    return view('example.mahasiswa', compact('nama', 'nilai'));
});

Route::get('/genshin', function () {
    $characters = [
        ['name' => 'Qiqi', 'element' => 'Anemo', 'image' => 'qiqi.png'],
        ['name' => 'Diluc', 'element' => 'Pyro', 'image' => 'diluc.webp'],
        ['name' => 'Keqing', 'element' => 'Electro', 'image' => 'keqing.webp'],
        ['name' => 'Klee', 'element' => 'Pyro', 'image' => 'klee.webp']

    ];
    return view('example.genshin', compact('characters'));
});
