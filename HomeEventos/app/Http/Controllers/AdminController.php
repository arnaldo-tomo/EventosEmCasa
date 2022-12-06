<?php

namespace App\Http\Controllers;

use App\Models\catergoria;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function categoria()
    {
        $usuario =  catergoria::all();
        echo $usuario;
    }
}
