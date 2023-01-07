<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gosto extends Model
{
    use HasFactory;
    protected $table = 'gostos';
    protected $fillable = ['user_id', 'eventos_id'];
    public $timestamps = false;


    public function vento()
    {
        return $this->hasMany(Eventos::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
