<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class SwitchLanguageController extends Controller
{
    //
    public function toArabic()
    {
        app()->setLocale('ar');
        return redirect(route('home'));
        // return redirect()->back();
    }
    public function toEnglish()
    {
        app()->setLocale('en');
        return redirect(route('home'));

    }
}
