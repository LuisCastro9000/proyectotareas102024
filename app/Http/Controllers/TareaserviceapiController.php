<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Http\Controllers\Exception;

class TareaserviceapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        return $listatareas = Tarea::all();
        } catch (\Exception $ex) {
            //echo $ex->getMessage();
            return response()->json(array('code'      =>  401,   'message'   =>  $ex->getMessage()), 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            $tareanueva = new Tarea;
            $tareanueva->DNI = $request->DNI;
            $tareanueva->Titulo = $request->Titulo;
            $tareanueva->Descripcion = $request->Descripcion;
            $tareanueva->FechaVencimiento = $request->FechaVencimiento;
            $tareanueva->FechaCreacion = $request->FechaCreacion;
            $tareanueva->Estado = "Pendiente";
            $tareanueva->Activo = 1;
            $tareanueva->save();
            $respuestaexitosa= "se registro la tarea ".$tareanueva->Titulo. " con código ".$tareanueva->IdTarea;
            $codigo= 201;
            return response()->json(array('code'      =>   $codigo,   'message'   =>  $respuestaexitosa),201);
        } catch (\Exception $ex) {
            //echo $ex->getMessage();
            return response()->json(array('code'      =>  401,   'message'   =>  $ex->getMessage()), 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $tareabusqueda= Tarea::find($id);
            return $tareabusqueda;
        } catch (\Exception $ex) {
            //echo $ex->getMessage();
            return response()->json(array('code'      =>  401,   'message'   =>  $ex->getMessage()), 401);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
