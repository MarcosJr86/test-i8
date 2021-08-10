<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;




class extraerAPIController extends Controller
{
    /**
    * Extrae datos  desde la API pública https://jsonplaceholder.typicode.com/users
    * 
    * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse
    */
    public function extraerAPI(){
        $respuesta = new Http();
        $usuarios = new stdClass();
        try {
            //code... 
            $respuesta = Http::get("https://jsonplaceholder.typicode.com/users");
            

            if ($respuesta->successful()) {
                $usuarios=$respuesta->json();
                return view('extraer-api',compact('usuarios')); 
              
            }else{
                return redirect()->back()->with('error', 'Error al procesar su solicitud. Por favor intente más tarde.');
            }
        
        } catch (\Throwable $th) {
            Log::error("Error en extraerAPIController");
            return redirect()->back()->with('error', 'Error al procesar su solicitud. Por favor intente más tarde.');

        }
    }
}
