<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function todos()
    {
        return view('eventos.todos');
    }

    public function detalhes()
    {
        return view('eventos.detalhes');
    }

    public function categoria()
    {
        return view('eventos.categoria');
    }
}
