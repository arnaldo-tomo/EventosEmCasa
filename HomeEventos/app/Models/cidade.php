<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cidade extends Model
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'cidade';
    protected $fillable = ['nome'];

    public function eventos()
    {
        return $this->belongsToMany(Eventos::class, 'evento_id');
    }
}
