<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catergoria extends Model
{
    use HasFactory;
    protected  $fillable = ['nome', 'foto'];

    public function Evento()
    {
        return $this->belongsToMany(Eventos::class,);
    }
}
