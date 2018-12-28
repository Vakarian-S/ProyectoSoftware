<?php

namespace App\Http\Controllers;

use App\ActividadASP;
use App\Organizacion;
use App\ActividadASP_Organizacion;
use Illuminate\Http\Request;

class ActividadASPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActividadASP  $actividadASP
     * @return \Illuminate\Http\Response
     */
    public function show(ActividadASP $actividadASP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActividadASP  $actividadASP
     * @return \Illuminate\Http\Response
     */
    public function edit(ActividadASP $actividadASP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActividadASP  $actividadASP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActividadASP $actividadASP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActividadASP  $actividadASP
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActividadASP $actividadASP)
    {
        //$extension = new ActividadExtension();
        //        $extension->nombre = $request->nombre;
        //        $extension->asignatura = $request->asignatura;
        //        $extension->profesor= $request->profesor;
        //        $extension->periodo = $request->periodo;
        //        $extension->cant_estudiantes = $request->cant_estudiantes;
        //        $extension->evidencia = $request->evidencia;
        //        $extension->save();
    }
    public function registrarASP(Request $request)
    {
        $extension = new ActividadASP();
        $extension->nombre = $request->nombre;
        $extension->asignatura = $request->asignatura;
        $extension->profesor= $request->profesor;
        $extension->periodo = $request->periodo;
        $extension->cant_estudiantes = $request->cant_estudiantes;
        $extension->evidencia = $request->evidencia;
        $extension->save();

        $socioComunitario = $request->nombreSocio;
        $organizacionId = Organizacion::where('nombre',$socioComunitario)->first()->id;
        $actividadId = ActividadASP::where('nombre',$request->nombre)->first()->id;
        ActividadASP_Organizacion::create([
            'actividadasp_id' => $actividadId,
            'organizacion_id' => $organizacionId,
        ]);
        return view('registroASP');
    }
}
