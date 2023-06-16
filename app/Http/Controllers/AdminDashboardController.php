<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\Blog;
use App\Models\Potensi;
use App\Models\User;


class AdminDashboardController extends Controller
{
    function index(){
        $data = [
            'pesan' => Pesan::count(),
            'blog' => Blog::count(),
            'potensi' => Potensi::count(),
            'user' => User::count(),
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layout.wrapper', $data);
    }
}
