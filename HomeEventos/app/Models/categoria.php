<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected  $fillable = ['nome', 'descricao', 'foto'];

    public function Evento()
    {
        return $this->belongsToMany(Eventos::class,);
    }
}
