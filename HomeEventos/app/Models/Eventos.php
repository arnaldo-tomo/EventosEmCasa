<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    protected $table = 'eventos';
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


    public function dono()
    {
        return $this->belongsTo(User::class,  'user_id');
    }
}
