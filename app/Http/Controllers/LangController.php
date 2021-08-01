<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function setLang($lang, Request $request)
    {
        $langArray = ['en', 'ar'];
        if (!in_array($lang, $langArray)) {
            $lang = $lang ?? "en";
        }
        $request->session()->put('lang', $lang);
        return back();
    }
}