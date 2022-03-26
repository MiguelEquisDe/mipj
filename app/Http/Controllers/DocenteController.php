<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un array para poder manipular información de la tabla *cursos*
        //a su vez el array actuará mas como un objeto
        $doc = docente::all();
        return view('docentes.index', compact('doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $doc = new docente();
        $doc->nombres = $request->input('nombre');
        $doc->apellido = $request->input('apellido');
        $doc->titulo = $request->input('titulo');
        $doc->cursoasociado = $request->input('curso');


        if ($request->hasfile('img')) {
            $doc->img = $request->file('img')->store('public');
        }
        $doc->save();
        return 'Waw, lograste guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doc = docente::find($id);
        return view('docentes.show', compact('doc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = docente::find($id);
        return view('docentes.edit', compact('doc'));
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
        $doc = docente::find($id);
        $doc->fill($request->except('img'));
        if ($request->hasfile('img')) {
            $doc->img = $request->file('img')->store('public');
        }
        $doc->save();
        return 'Actualización completa';
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
