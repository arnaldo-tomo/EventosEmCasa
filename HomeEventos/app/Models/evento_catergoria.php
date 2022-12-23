<?php

namespace App\Models;

use App\Models\categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class evento_categoria extends Model
{
    use HasFactory;

    protected $table = 'evento_categoria';
    protected $fillable = ['evento_id', 'categoria_id'];
}
