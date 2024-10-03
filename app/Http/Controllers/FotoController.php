<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Galery;
use Illuminate\Http\Request;

class FotoController extends Controller
{


    public function store(Request $request){
        $request->validate([
            'galery_id' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
            'judul' => 'required',
        ]);
        $file = $request->file('file');

        $fileName = time() . '.' . $file->extension();

        $file->move(public_path('images'), $fileName);

        Foto::create([
            'galery_id' => $request->galery_id,
            'file' => $fileName,
            'judul' => $request->judul,
        ]);

        return back()->with('success', 'Foto berhasil ditambahkan');
    }

    public function destroy($id){
        $foto = Foto::find($id);

        unlink(public_path('images/' . $foto->file));

        $foto->delete();

        return back()->with('success', 'Foto berhasil dihapuskan');
    }
}
