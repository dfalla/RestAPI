<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function SaludarUsuario($usuario){
        return "Bienvenido a nuestra web " . $usuario; 
    }
}
