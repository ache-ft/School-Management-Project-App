<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class LocalizatioController extends Controller
{
    public function setLang($locale){
        App::setLocale($locale);
        Session::put("locale",$locale);     
        return redirect()->back();
        


    } 
}
