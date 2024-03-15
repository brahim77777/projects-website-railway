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

Route::get("/", function () {

    return view("home", ['projects' => \App\Models\Project::all()]);
})->name("home");


Route::get("/create", function () {
    return view("create_project");
})
    ->name('create_project')
    ->middleware("auth");

Route::get("/mail", function () {
    return view("send_mail");
})
    ->name("send_mail")
    ->middleware("auth");
