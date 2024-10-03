<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'foto'; 
    protected $fillable = [
        'id',
        'galery_id',
        'file',
        'judul',
    ];

    public function galry(){
        return $this->belongsTo(Galery::class);
    }

    public $timestamps = false;
}
