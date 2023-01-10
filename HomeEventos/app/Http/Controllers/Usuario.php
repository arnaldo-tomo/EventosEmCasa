<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Usuario extends Controller
{
    public function infoUpdate(Request $request)
    {

        $infoUpdate = User::find(Auth::user()->id);
        $request->validate([
            'name' => 'min:4|string|max:255',
            'email'  =>  'required|email|unique:users,email,'.Auth::user()->id, // <--- THIS LINE
            'website' => 'string|max:50',
            'twitter' => 'string|unique:users|max:50',
            'empresa' => 'string|unique:users|max:50',
            'contacto' => 'numeric|unique:users,contacto|max:2',
            'localizacao' => 'string|max:50',
            'descricao' => 'string|max:255'
        ]);
        $infoUpdate->name = $request->input('name');
        $infoUpdate->email = $request->input('email');
        $infoUpdate->website = $request->input('website');
        $infoUpdate->twitter = $request->input('twitter');
        $infoUpdate->empresa = $request->input('empresa');
        $infoUpdate->contacto = $request->input('contacto');
        $infoUpdate->localizacao = $request->input('localizacao');
        $infoUpdate->descricao = $request->input('descricao');
        $infoUpdate->update();
        return back()->with('message', 'Profile Updated');
    }


    public function PasswordUpdate(Request $request)
    {
        // validadacao de campos
        // $request->validate([
        //     'senhaactual' => 'required',
        //     'password' => 'required',
        //     'password_confirmation' => 'required',
        // ]);
        // $criptografar = Hash::make($request['senhaactual']);
        // $query_ru = user::where(auth()->user()->password, $criptografar);
        $check = hash::check($request['senhaactual'], auth()->user()->password);
        if (!$check == true) {
            return redirect()->back()->with('senhaactual', 'A sua senha Actual Nao confere ');
        } else {

            $password = $request->password;
            $password_confirmation = $request->password_confirmation;

            if ($password == $password_confirmation) {
                // $user = auth()->user()->id;
                // // $user = User::findOrfail($user);
                // Hash::make($request['password']);
                // auth()->user()->id;
                // $user->update('password', $request->password);
                DB::table('users')->where(['id' => auth()->user()->id])->update(['password' => Hash::make($request->password)]);

                return redirect()->back()->with('status', 'Senha actualizada com Successos.');
            } else {
                return redirect()->back()->with('password_confirmation', 'Suas credencias não  batem com os nossos registos');
            }
        }
    }
}
