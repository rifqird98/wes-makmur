<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('welcome', compact('post'));
    }

    public function edit($id)
    {
        $data = Post::findOrfail($id);
    
        return view('detail-isi', compact('data'));
    }

}
