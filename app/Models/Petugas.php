<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use Notifiable;

    protected $table = 'petugas';
    use Notifiable;

    protected $fillable = [
        'id',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
    public $timestamps = true;
    const UPDATED_AT = null;

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
