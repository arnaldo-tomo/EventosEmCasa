<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    public function sair(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function salvar(Request $request)
    {
        dd($request->all());
    }
}
