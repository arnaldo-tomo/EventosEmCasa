<?php

namespace App\Models;

use App\Models\User;
use App\Models\catergoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'link',
        'imagen'
    ];


    public function dono()
    {
        return $this->belongsTo(User::class,  'user_id');
    }
    public function usuario()
    {
        return $this->belongsToMany(User::class, 'gostos', 'user_id', 'eventos_id');
    }
}
