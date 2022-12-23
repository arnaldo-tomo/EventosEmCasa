<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento_catergoria extends Model
{
    use HasFactory;

    protected $table = 'evento_catergorias';
    protected $fillable = ['evento_id', 'catergoria_id'];
}
