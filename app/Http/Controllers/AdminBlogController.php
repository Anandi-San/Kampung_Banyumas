<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;


class AdminBlogController extends Controller
{
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Blog',
            'blog' => Blog::with('kategori')->get(),
            'content' => 'admin/blog/index'
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
            'title' => 'Tambah blog',
            'kategori' => Kategori::get(),
            'content' => 'admin/blog/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=> 'required',
            'kategori_id' => 'required',
            'body'=> 'required|min:100',
            'cover'=> 'required',
        ]);


        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $file_name = time(). '-'. $cover->getClientOriginalName();
            $storage = 'uploads/banners/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = null;
        }

        Blog::create($data);
        return redirect('/admin/posts/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = [
            'title' => 'Edit blog',
            'blog' => Blog::find($id),
            'content' => 'admin/blog/show'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = [
            'title' => 'Edit blog',
            'blog' => Blog::find($id),
            'kategori' => Kategori::get(),
            'content' => 'admin/blog/add'
        ];
        return view('admin.layout.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $blog = Blog::find($id);
        $data = $request->validate([
            'title'=> 'required',
            'body'=> 'required',
            // 'kategori_id' => 'required',
            // 'cover'=> 'required',
        ]);
        // dd($blog);

        if($request->hasFile('cover')){

            if($blog->cover != null){
                unlink($blog->cover);
            }

            $cover = $request->file('cover');
            $file_name = time(). '-'. $cover->getClientOriginalName();
            $storage = 'uploads/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
                $data['cover'] = $blog->cover;
            }

        $blog->update($data);
        return redirect('/admin/posts/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $blog = Blog::find($id);

        if($blog->cover != null){
            unlink($blog->cover);
        }
        
        $blog->delete();
        return redirect('/admin/posts/blog');
    }
}
