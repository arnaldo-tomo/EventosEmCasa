<?php

namespace App\Http\Controllers;

use Request;
use session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\gosto;
use App\Models\cidade;
use App\Models\Eventos;
use App\Models\categoria;
use App\Models\tipodeevento;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;


class EventosController extends Controller
{


    public function Main()
    {

        // dd($teste->created_at->format('l jS \\of F Y h:i ', 'Africa/Maputo'));
        //"Sunday 4th of December 2022 08:50 "

        // echo Carbon::now()->parse($teste->created_at)->locale('pt')->diffForHumans();
        //há 7 horas

        // dd(Carbon::parse($teste->created_at)->locale('pt-BR')->isoFormat('LLLL'));
        // "quinta-feira, 8 de dezembro de 2022 às 10:48"
    }

    public function home()
    {
        $eventos = Eventos::ORDERBY('id', 'DESC')->paginate(8);
        $catergoria =  categoria::all();
        $cidades = cidade::all();
        $participantes = User::all();
        return view('welcome', compact('eventos',  'catergoria', 'cidades', 'participantes',));
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

    public function perfile()
    {
        $dia = Carbon::now();
        $estaSemana = Eventos::where('created_at',  $dia->startOfWeek())->where('created_at', $dia->endOfWeek())->where('user_id', Auth::user()->id)->get();
        $local = Eventos::where('user_id', Auth::user()->id)->where('categoria_id', '<>', 22)->ORDERBY('id', 'DESC')->paginate(6);
        $online = Eventos::where('user_id', Auth::user()->id)->where('categoria_id', 22)->ORDERBY('id', 'DESC')->get();
        $eventos = Eventos::where('user_id', Auth::user()->id)->ORDERBY('id', 'DESC')->paginate(5);
        $total = Eventos::where('user_id', Auth::user()->id);
        $participantes = $amigos = User::all();
        $info = User::find(Auth::user()->id);
        $catergoria = categoria::all();
        $cidades = cidade::all();
        return view('eventos.perfil', compact('info', 'total', 'participantes', 'catergoria', 'cidades', 'amigos', 'local', 'estaSemana', 'online',  'eventos'));
    }


    public function Verperfil($id)
    {
        $info = User::find($id);
        return view('eventos.verperfil', compact('info',));
    }
    public function sobre(Request $request, $id)
    {
        $info = User::find($id);
        return view('eventos.sobre', compact('info'));
    }

    public function sair(Request $request)
    {
        Auth::guard('web')->logout();
        $request::session()->invalidate();
        $request::session()->regenerateToken();
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

    public function gosto($id)
    {
        $gosto = gosto::where('eventos_id', $id)->where('user_id', Auth::user()->id)->first();
        if ($gosto) {
            DB::table('gostos')->where('eventos_id', $id)
                ->where('user_id', Auth::user()->id)
                ->delete();
        } else {
            gosto::create([
                'user_id' => Auth::user()->id,
                'eventos_id' => $id
            ]);
        }
        // $gosto = new gosto();
        // $gosto->user_id = Auth::user()->id;
        // $gosto->eventos_id = $id;
        // $gosto->save();
        return redirect()->back()->with('interessante');
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
