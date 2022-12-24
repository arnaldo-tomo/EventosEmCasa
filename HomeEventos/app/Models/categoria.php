<?php

namespace App\Models;

use App\Models\Eventos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected  $fillable = ['nome', 'descricao', 'foto'];

    public function Evento()
    {
        return $this->belongsToMany(Eventos::class,);
    }

    public function eventoo()
    {
        return $this->belongsToMany(Eventos::class, 'evento_categoria', 'evento_id', 'categoria_id');
    }

    public function tipodeevento()
    {
        return $this->belongsTo(tipodeevento::class, 'tipodeevento_id');
    }
}
