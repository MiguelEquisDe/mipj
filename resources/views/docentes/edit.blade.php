@extends('Layouts.app')

@section('titulo', 'editar')

@section('contenido')
    <br>
    <center>
        <h3><b>Editar</b></h3>
    </center>
    {{-- se utiliza el comando enctype para subir archivos --}}
    <form action="/docentes/{{$doc->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="img"><b>Actualizar Imagen</b></label>
            <input name="img" type="file" value="{{$doc->img}}" id="img">
        </div>
        <div class="form-group">
            <label for="nombre"><b>Modificar Nombre(s)</b></label>
            <input name="nombre" id="nombre" type="text" value="{{$doc->nombres}}" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="apellido"><b>Modifiar Apellidos</b></label>
            <input name="apellido" type="text" value="{{$doc->apellido}}" class="form-control" id="apellido">
        </div>
        <div class="form-group">
            <label for="titulo"><b>Modifiar Títulos</b></label>
            <input name="titulo" type="text" value="{{$doc->titulo}}" class="form-control" id="titulo">
        </div>
        <div class="form-group">
            <label for="cursoasociado"><b>Modifiar Cursos</b></label>
            <input name="cursoasociado" type="text" value="{{$doc->cursoasociado}}" class="form-control" id="cursoasociado">
        </div>

        <button type="submit" class="btn btn-danger"><b>Yamete Kudasai (Actualizar)</b></button>
    </form>
@endsection
