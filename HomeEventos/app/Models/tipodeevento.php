<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipodeevento extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsToMany(categoria::class, 'categoria_tipodeeventos', 'categoria_id', 'tipodeeventos_id');
    }
}
