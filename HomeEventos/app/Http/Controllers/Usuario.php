<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use Illuminate\Queue\Middleware\WithoutOverlapping;

class Usuario extends Controller
{
    public function infoUpdate(Request $request)
    {

        $infoUpdate = User::find(Auth::user()->id);
        $request->validate([
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255',
            'website' => 'string|max:255',
            'twitter' => 'string|max:255',
            'empresa' => 'string|max:255',
            'contacto' => 'string|max:10',
            'localizacao' => 'string|max:255',
            'descricao' => 'string|max:255'
        ]);
        $infoUpdate->name = $request->input('name');
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
