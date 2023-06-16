<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class AdminBannerController extends Controller
{
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Banner',
            'banner' => Banner::get(),
            'content' => 'admin/banner/index'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah banner',
            'content' => 'admin/banner/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'headline'=> 'required',
            'desc'=> 'required',
            // 'urutan'=> 'required',
            'gambar'=> 'required',
        ]);

        // dd($data);
        $data['urutan'] = 0;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time(). '-'. $gambar->getClientOriginalName();
            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }else{
            $data['gambar'] = null;
        }

        Banner::create($data);
        return redirect('/admin/banner');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = [
            'title' => 'Edit banner',
            'banner' => Banner::find($id),
            'content' => 'admin/banner/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $banner = Banner::find($id);
        $data = $request->validate([
            'headline'=> 'required',
            'desc'=> 'required',
            // 'urutan'=> 'required',
            // 'gambar'=> 'required',
        ]);

        $data['urutan'] = 0;

        if($request->hasFile('gambar')){

            if($banner->gambar != null){
                unlink($banner->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time(). '-'. $gambar->getClientOriginalName();
            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }else{
            $data['gambar'] = $banner->gambar;
        }

        $banner->update($data);
        return redirect('/admin/banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $banner = Banner::find($id);

        if($banner->gambar != null){
            unlink($banner->gambar);
        }
        
        $banner->delete();
        return redirect('/admin/banner');
    }
}
