<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller{
    public function home(){
        $title = "Página Inicial";
        return view('site.home')->with(compact( 'title'));
    }
    public function sobre(){
        $title = "Sobre";
        return view('site.sobre')->with(compact( 'title'));
    }

    public function portfolio(){
        $title = "Portifólio";
        return view('site.portfolio')->with(compact( 'title'));
    }
}
