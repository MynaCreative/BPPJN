<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
    return view('page.home');
})->name('home');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('page.gallery');
})->name('gallery');

Route::get('/profile-{page}', function ($page) {
    return view('page.profile.' . $page);
})->name('profile');

Route::get('/organization-{page}', function ($page) {
    return view('page.organization.' . $page);
})->name('organization');

Route::get('/publikasi', function () {
    return view('page.publikasi.index');
})->name('publikasi-index');

Route::get('/publikasi-single', function () {
    return view('page.publikasi.single');
})->name('publikasi-single');

Route::get('/publikasi-informasi-berkala', function () {
    return view('page.publikasi.informasi-berkala');
})->name('publikasi-informasi-berkala');

Route::get('/publikasi-ppid-balai', function () {
    return view('page.publikasi.ppid-balai');
})->name('publikasi-ppid-balai');

Route::get('/artisan/{command}', function ($command) {
    $exitCode = Artisan::call($command);
    return "<u>{$command}</u> has been executed";
})->name('artisan');
