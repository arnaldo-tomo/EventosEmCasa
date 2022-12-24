<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria_tipodeevento extends Model
{
    use HasFactory;
    protected $table = 'categoria_tipodeeventos';
    protected $fillable = ['categoria_id', 'tipodeevento_id'];
}
