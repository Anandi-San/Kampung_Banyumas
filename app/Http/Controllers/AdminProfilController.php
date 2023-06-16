<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class AdminProfilController extends Controller
{
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Profil',
            'profil' => Profil::first(),
            'content' => 'admin/profil/index'
        ];
        return view('admin.layout.wrapper', $data);
    }
    
    public function update(Request $request)
    {
        //
        $profil = Profil::first();
        $data = $request->validate([
            'name'=> 'required',
            'desc'=> 'required',
            // 'cover'=> 'required',
            // 'cover'=> 'required',
        ]);


        if($request->hasFile('cover')){

            if($profil->cover != null){
                unlink($profil->cover);
            }


            $cover = $request->file('cover');
            $file_name = time(). '-'. $cover->getClientOriginalName();
            $storage = 'uploads/banners/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $profil->cover;
        }

        $profil->update($data);
        return redirect('/admin/profil');
    }
}
