<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Potensi;
use App\Models\Blog;
use App\Models\Banner;



class HomeController extends Controller
{
    function index(){
        $data = [
            'profil' =>  Profil::first(),
            'potensi' =>  Potensi::limit(4)->get(),
            'blog' =>  Blog::limit(4)->get(),
            'banner' => Banner::get(),
            'content' => 'home/beranda/index'
        ];
        return view('home.layout.wrapper', $data);
    }

    function profil(){
        $data = [
            'profil' =>  Profil::first(),
            'content' => 'home/profil/index'
        ];
        return view('home.layout.wrapper', $data);
    }
    function potensi(){
        $data = [
            'potensi' =>  Potensi::get(),
            'content' => 'home/potensi/index'
        ];
        return view('home.layout.wrapper', $data);
    }
}
