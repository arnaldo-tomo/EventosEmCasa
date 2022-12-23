<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento_categoria extends Model
{
    use HasFactory;

    protected $table = 'evento_categoria';
    protected $fillable = ['evento_id', 'categoria_id'];
}
