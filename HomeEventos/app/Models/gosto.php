<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gosto extends Model
{
    use HasFactory;
    public $timestmps = false;
    protected $table = 'gostos';
    protected $fillable = ['user_id', 'eventos_id'];
}
