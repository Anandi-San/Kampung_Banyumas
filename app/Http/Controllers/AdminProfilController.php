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

    // public function create()
    // {
    //     $data = [
    //         'name'=> ''
    //     ]
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'cover' => 'required|file', // Add file validation rule
        ]);
    
        $profil = Profil::find(1); // Assuming you are fetching a specific profile using find() method, adjust as needed
    
        if ($request->hasFile('cover')) {
            if ($profil->cover != null) {
                // Delete the previous cover file if it exists
                unlink($profil->cover);
            }
    
            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();
            $storage = 'uploads/banners/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        } else {
            $data['cover'] = $profil->cover;
        }
    
        Profil::create($data);
        return redirect('/admin/profil');
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