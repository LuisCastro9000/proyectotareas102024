<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Http\Controllers\Http;
use GuzzleHttp\Client;

class TareaController extends Controller
{
    //
    public function index()
    {
        
        $client = new Client(); 
        $response = $client->request('GET', 'http://localhost/proyectotareas/public/api/tareas');
        $datos = json_decode($response->getBody()->getContents(), true);
        return view('tarea/index', compact('datos'));
        //dd($datos);
    }


    public function Tareanueva()
    {
        return view('tarea/nuevatarea');
    }

    public function Registrotareanueva(Request $req)
    {
       //dd($req);
       $client = new Client(); 
       $response = $client->post('http://localhost/proyectotareas/public/api/tareas',
        [ 'json' => [ 
            "DNI" => $req->dnitarea,
            "Titulo"=> $req->titulotarea,
            "Descripcion"=> $req->descripciontarea,
            "FechaVencimiento"=> $req->fechatarea,
            "FechaCreacion"=>$req->fechatarea,
            "Estado"=> $req->estadoarea,
            "Activo"=> 1] ]);
        $datos = json_decode($response->getBody()->getContents(), true);
        return redirect()->route('listatareas');
        //dd($datos);
    }

    public function ActualizarTarea(Request $req)
    {
        return view('tarea/nuevatarea');
    }


}
