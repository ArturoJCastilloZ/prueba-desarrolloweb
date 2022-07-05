<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Se extra la información de la tabla users y de envia a la vista con la variable $usuarios
     */
    public function index() {
        $usuarios = \DB::table('users')
            ->select('*')
            ->orderBy('id', 'DESC')
            ->get();
        return view('home')->with('usuarios', $usuarios);
    }
}
