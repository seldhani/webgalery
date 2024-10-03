<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class HomeController extends Controller
{
    public function index()
    {
        $galery = Galery::all();
        return view('welcome', compact('galery'));
    }
}
