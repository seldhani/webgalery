<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\Galery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all(); // Ambil semua data petugas
        $kategori = Kategori::all(); // Ambil semua data petugas
        $posts = Post::all(); // Ambil semua data petugas
        $galery = Galery::all(); // Ambil semua data petugas
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'petugas' => $petugas, // Kirim data ke view
            'kategori' => $kategori,
            'posts' => $posts,
            'galery' => $galery,
        ]);
    }
}

