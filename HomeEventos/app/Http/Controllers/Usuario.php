<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class Usuario extends Controller
{
    public function PasswordUpdate(Request $request)
    {
        // validadacao de campos
        $request::validate([

            'senhaactual' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',

        ]);
        // $criptografar = Hash::make($request['senhaactual']);
        // $query_ru = user::where(auth()->user()->password, $criptografar);
        $check = hash::check($request['senhaactual'], auth()->user()->password);
        if (!$check == true) {
            return redirect()->back()->withErrors('A sua senha Actual Nao confere ');
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

                return redirect()->back()->with('status', 'Senha Actualizada com Successos.');
            } else {
                return redirect()->back()->withErrors('suas credencias nao  batem com os nossos registos');
            }
        }
    }
}
