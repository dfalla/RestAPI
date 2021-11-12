<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function ObtenerPersona($id){

        $persona1 = new Persona;
        $persona1 -> nombre = "Nombre " .$id;
        $persona1 -> apellido = "Apellido " .$id;
        $persona1 -> DNI = "DNI ".$id;

        return response()->json($persona1);
    }

    public function CrearPersona(Request $request){
        $json = $request -> all();
        
        $DNI = $json ['DNI'];

        return "El usuario con el DNI: " . $DNI . " ha sido creado";
    }

    public function ModificarPersona(Request $request, $id){
         
        $json = $request -> all();
        
        $DNI = $json ['DNI'];

        return "El usuario con el id: " .$id ." y DNI " . $DNI . " ha sido creado";
    }

    public function EliminarPersona($id){
         
        return "El usuario con el id: " . $id . " ha sido eliminado";
    }
    


}
