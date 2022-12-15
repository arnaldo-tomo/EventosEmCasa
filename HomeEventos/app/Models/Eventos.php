<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'user_name',
        'descricao',
        'cidade',
        'privado',
        'tipo_categoria',
        'hora',
        'participante',
        'dataInicio',
        'dataFim',
        'duracao',
        'localizacao',
        'anexo',
        'imagen'
    ];


    public function User()
    {
        return $this->belongsToMany([User::class]);
    }

    public function Users()
    {
        return $this->belongsToMany([User::class]);
    }
}
