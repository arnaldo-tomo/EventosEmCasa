<?php

namespace App\Models;

use App\Models\User;
use App\Models\categoria;
use App\Models\catergoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eventos extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = [
        'titulo',
        'descricao',
        'categoria_id',
        'cidade_id',
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

    public function categoria()
    {
        return $this->belongsTo(categoria::class,  'categoria_id');
    }

    public function cidades()
    {
        return $this->belongsTo(cidade::class, 'cidade_id');
    }
}
