<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potensi;

class AdminPotensiController extends Controller
{
    
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen potensi',
            'potensi' => Potensi::get(),
            'content' => 'admin/potensi/index'
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
            'title' => 'Tambah potensi',
            'content' => 'admin/potensi/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $data = $request->validate([
            'title'=> 'required',
            'icon'=> 'required',
            'desc'=> 'required',
       
        ]);


        Potensi::create($data);
        return redirect('/admin/potensi');
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
            'title' => 'Edit potensi',
            'potensi' => Potensi::find($id),
            'content' => 'admin/potensi/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $potensi = Potensi::find($id);
        $data = $request->validate([
            'title'=> 'required',
            'icon'=> 'required',
            'desc'=> 'required',
        ]);

        $potensi->update($data);
        return redirect('/admin/potensi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $potensi = Potensi::find($id);
        $potensi->delete();
        return redirect('/admin/potensi');
    }
}
