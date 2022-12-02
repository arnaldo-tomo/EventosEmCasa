<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventosController extends Controller
{

    public function home()
    {
        $eventos = Eventos::all();
        return view('welcome', compact('eventos'));
    }
    public function todos()
    {
        $eventos = Eventos::all();
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

    public function perfil()
    {
        if (!Auth::check()) {
            redirect()->back();
        }

        $info = User::where('id', Auth::user()->id)->get()->first();
        $eventos = Eventos::where('user_id', Auth::user()->id)->ORDERBY('id', 'DESC')->get();
        return view('eventos.perfil', compact('info', 'eventos'));
    }
    public function sobre()
    {
        if (!Auth::check()) {
            redirect()->back();
        }

        $info = User::where('id', Auth::user()->id)->get()->first();
        return view('eventos.sobre', compact('info'));
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
        $evento = new Eventos();
        $evento->user_id = Auth::user()->id;
        $evento->titulo = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->dataInicio = $request->dataInicio;
        $evento->dataFim = $request->dataFim;
        $evento->hora = $request->hora;
        $evento->privado = $request->privado;
        $evento->duracao = $request->duracao;
        $evento->localizacao = $request->localizacao;
        $evento->cidade = $request->cidade;
        $evento->tipo_categoria = $request->categoria;
        $evento->participante = $request->participante;
        $evento->imagen = $request->imagen;
        if ($request->file('imagen') != null) {
            $filename = $request->file('imagen')->getClientOriginalName();
            $link = "imagen/eventos/" . $filename;
            $evento->imagen = $link;
            $foto = $request->file('imagen');
            $foto->move('imagen/eventos', $filename);
        }
        $evento->save();
        $messagen = "Evento publicado com sucessos!";
        return redirect()->back()->with('novo', $messagen);
    }
}
