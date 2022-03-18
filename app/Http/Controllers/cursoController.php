<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
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
        $cursito = curso::all();
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        con el metodo all() veo toda la información
        */
        //return $request->all();

        /*
        obtuvimos el dato de lo que el usuario envia por el imput
        cuyo name es 'nombre'*/
        //return $request->input('nombre');

        /*
        creamos una nueva estancia del modelo
        */
        $cursito = new curso();

        /*
        esto me permitira manipular la tabla
        */
        $cursito->nombre = $request->input('nombre');
        $cursito->description = $request->input('descripcion');
        //con esto ejecutamos el comando para guardar

        if ($request->hasfile('img')) {
            $cursito->img = $request->file('img')->store('public');
        }

        /*
        con esto ejecutamos comando para guardar
        */
        $cursito->save();
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
        //creo un array con una informacion del registro
        //del id que viajó en la solicitud
        $cursito = curso::find($id);
        //asocio el array al view usando compact
        return view('cursos.show', compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = curso::find($id);
        //return $cursito;
        return view('cursos.edit', compact('cursito'));
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
        $cursito = curso::find($id);
        /*con fill lleno todos los campos de la tabla cursos
        con la info que viene desde el request
        excepto lo que viene desde el imput llamado imagen*/
        $cursito->fill($request->except('img'));
        if ($request->hasfile('img')) {
            $cursito->img = $request->file('img')->store('public');
        }
        $cursito->save();
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
