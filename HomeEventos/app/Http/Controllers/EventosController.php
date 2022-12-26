<?php

namespace App\Http\Controllers;

use Request;
use App\Models\User;
use App\Models\gosto;
use App\Models\cidade;
use App\Models\Eventos;
use App\Models\categoria;
use App\Models\tipodeevento;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;


class EventosController extends Controller
{


    public function home()
    {
        $eventos = Eventos::ORDERBY('id', 'DESC')->paginate(8);
        $catergoria =  categoria::all();
        $cidades = cidade::all();
        $participantes = User::all();
        $teste = Eventos::find(14);

        $dt = Carbon::parse($teste->dataInicio);
        // dd($teste->created_at->format('l jS \\of F Y h:i ', 'Africa/Maputo'));
        //"Sunday 4th of December 2022 08:50 "

        // dd($teste->created_at->format('j F Y', 'pt', '20 fevereiro 2001')->locale('pt'));
        // echo Carbon::parse($teste->created_at)->locale('pt-BR')->isoFormat('LLLL');
        // return view('welcome', compact('eventos', 'catergoria', 'cidades', 'participantes',));
        // echo Carbon::now()->subMinutes($teste->created_at->dayOfweek)->diffForHumans();
        echo Carbon::now()->parse($teste->created_at)->locale('pt')->diffForHumans();
        //há 7 horas
    }


    public function Configuracoes()
    {
        return view('eventos.Configuracoes');
    }
    public function todos()
    {
        $eventos = Eventos::all();
        $catergoria =  categoria::all();
        return view('eventos.todos', compact('eventos', 'catergoria'));
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
        $eventos = Eventos::where('user_id', Auth::user()->id)->ORDERBY('id', 'DESC')->paginate(6);
        $amigos = User::all();
        return view('eventos.perfil', compact('info', 'eventos', 'amigos'));
    }


    public function Verperfil($id)
    {
        $info = User::find($id);
        $eventos = Eventos::paginate(8);;
        return view('eventos.verperfil', compact('info', 'eventos'));
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
        // validadacao de campos
        $request::validate([
            'titulo' => 'required',
            'categoria_id' => 'required',
            'cidade_id' => 'required',
            'descricao' => 'required',
            'hora' => 'required',
            'dataInicio' => 'required',
            'dataFim' => 'required',
            'privado' => 'required',
            'duracao' => 'required',
            'localizacao' => 'required',
            'imagen' => 'required',
        ]);

        $evento = new Eventos();
        $evento->user_id = Auth::user()->id;
        $evento->cidade_id = Request::input('cidade_id');
        $evento->categoria_id = Request::input('categoria_id');
        $evento->titulo = Request::input('titulo');
        $evento->descricao = Request::input('descricao');
        $evento->dataInicio = Request::input('dataInicio');
        $evento->dataFim = Request::input('dataFim');
        $evento->hora = Request::input('hora');
        $evento->privado = Request::input('privado');
        $evento->duracao = Request::input('duracao');
        $evento->localizacao = Request::input('localizacao');
        $evento->participante = Request::input('participante');
        $evento->link = Request::input('link');

        if (Request::file('anexo') != null) {
            $filename = Request::file('anexo')->getClientOriginalName();
            $link = "anexo/eventos/" . $filename;
            $evento->anexo = $link;
            $foto = Request::file('anexo');
            $foto->move('anexo/eventos', $filename);
        }

        if (Request::file('imagen') != null) {
            $filename = Request::file('imagen')->getClientOriginalName();
            $link = "imagen/eventos/" . $filename;
            $evento->imagen = $link;
            $foto = Request::file('imagen');
            $foto->move('imagen/eventos', $filename);
        }
        $evento->save();
        $messagen =  "Evento " . Request::input('titulo') . " publicado com sucessos! ";
        return redirect()->back()->with('novo', $messagen);
    }

    public function gosto($id,  $request)
    {
        $gosto = new gosto();
        $gosto->user_id = Auth::user()->id;
        $gosto->eventos_id = $id;
        $gosto->save();
        // return redirect()->back()->with('interessante');
    }

    public function autocomplete(Request $request)
    {

        $paises = User::select("name")
            ->where("name", "LIKE", "%{$request->input('query')}%")
            ->get();
        return response()->json($paises);
        // $query = $request->get('query');
        // $filterResult = User::where('name', 'LIKE', '%' . $query . '%')->get();
        // return response()->json($filterResult);


        // $datas = User::select("name")
        //     ->where("name", "LIKE", "%{$request->terms}%")
        //     ->get();
        // return response()->json($datas);
    }
}
