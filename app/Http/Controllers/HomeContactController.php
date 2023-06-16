<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class HomeContactController extends Controller
{
    function index(){
        $data = [
            'content' => 'home/kontak/index'
        ];
            return view('home.layout.wrapper', $data);
    }

    function send (Request $request){
        $data = $request->validate([
        'name' => 'required',
        'desc' => 'required',
        ]);

        Pesan::create($data);
        return redirect('/kontak');
    }
}
