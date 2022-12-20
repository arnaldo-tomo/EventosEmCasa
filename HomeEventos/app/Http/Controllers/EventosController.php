<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\gosto;
use App\Models\cidade;
use App\Models\Eventos;
use App\Models\catergoria;
use App\Models\participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventosController extends Controller
{


    public function home()
    {
        $eventos = Eventos::ORDERBY('id', 'DESC')->paginate(8);
        $catergoria =  catergoria::all();
        $cidades = cidade::all();
        $participantes = User::all();

        // $evento = Eventos::find(1);
        // foreach ($evento->usuario as $i) {
        //     echo $i->name->count();
        // }

        return view('welcome', compact('eventos', 'catergoria', 'cidades', 'participantes',));
    }


    public function Configuracoes()
    {
        return view('eventos.Configuracoes');
    }
    public function todos()
    {
        $eventos = Eventos::all();
        $catergoria =  catergoria::all();
        return view('eventos.todos', compact('eventos', 'catergoria'));
    }


    public function categoria($categoria)
    {
        $eventos = Eventos::where('categoria', $categoria);
        return view('eventos.categoria');
    }

    public function perfil()
    {
        if (!Auth::check()) {
            redirect()->back();
        }

        $info = User::where('id', Auth::user()->id)->get()->first();
        $eventos = Eventos::where('user_id', Auth::user()->id)->ORDERBY('id', 'DESC')->paginate(6);
        $amigos = User::all();
        return view('eventos.perfil', compact('info', 'eventos', 'amigos'));
    }


    public function Verperfil($id)
    {
        $info = User::find($id)->get()->first();
        return view('eventos.verperfil', compact('info'));
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
        $evento->user_name = Auth::user()->name;
        $evento->titulo = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->dataInicio = $request->dataInicio;
        $evento->dataFim = $request->dataFim;
        $evento->hora = $request->hora;
        $evento->privado = $request->privado;
        $evento->duracao = $request->duracao;
        $evento->localizacao = $request->localizacao;
        $evento->cidade = $request->cidade;
        $evento->tipo_categoria = $request->tipo_categoria;
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

    public function gosto($id, Request $request)
    {

        $gosto = new gosto();
        $gosto->user_id = Auth::user()->id;
        $gosto->eventos_id = $id;
        $gosto->save();



        // return redirect()->back()->with('interessante');
    }
}
