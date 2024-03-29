<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function switchLang($lang)
    {
        if (array_key_exists($lang,Config::get('languages'))){

            Session::put('applocale',$lang);

        }
        return redirect()->back();
     
    }
}
