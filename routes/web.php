<?php

use App\Livewire\ProjectDetails;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get("contact", function () {
    return view("contact", ["home" => false]);
})->name("contact");

Route::get("/project_details", function () {
    return view("project_details");
})->name("project_details");

Route::post("/contact_form", function (Request $request) {
    dd($request->all());
})->name("contact_form");

Route::get("/create", function () {
    return view("create_project");
})
    ->name('create_project')
    ->middleware("auth");

Route::get("/mail", function () {
    return view("send_mail");
})
    ->name("send_email")
    ->middleware("auth");

Route::get("/{lang}", function () {
    return redirect(route('home'));
})->middleware('lang');


