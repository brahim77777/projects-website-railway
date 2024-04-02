<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class SwitchLanguageController extends Controller
{
    //
    public function toArabic()
    {
        App::setLocale('ar');
        // return redirect()->back();
    }
    public function toEnglish()
    {
        App::setLocale('en');
        return redirect()->back();

    }
}
