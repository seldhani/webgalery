<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; // Sesuaikan nama tabel

    protected $fillable = [
        'id',
        'judul',
        'kategori_id',
        'isi',
        'petugas_id',
        'status',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Definisi relasi dengan model Kategori

    public function petugas()
{
    return $this->belongsTo(Petugas::class, 'petugas_id');
}

    public function galery(){
        return $this->hasMany(Galery::class,'');
    }

    public $timestamps = true;

    const UPDATED_AT = null;
}
