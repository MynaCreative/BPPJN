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

Route::get('/route-list', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
})->name('artisan');
