<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $table = 'galery'; 
    protected $fillable = [
        'post_id',
        'position',
        'status',
    ];

    public function posts(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function foto(){
        return $this->hasMany(Foto::class);
    }

    const UPDATED_AT = null;
    public $timestamps = false; 
}
