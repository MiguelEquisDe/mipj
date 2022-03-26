{{-- para poder heredar la plantilla nesecito usar @extends --}}
@extends('Layouts.app')

@section('titulo', 'Crear registro')

@section('contenido')
    <br>
    <center>
        <h3><b>Registrar Nuevo docente</b></h3>
    </center>
    {{-- se utiliza el comando enctype para subir archivos --}}
    <form action="/docentes" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $alerta)
            <div class="alert alert-danger" role="alert">
                <ul>
                <li><b>{{ $alerta }}</b></li>
                </ul>
            </div>
            @endforeach
        @endif
        <div class="form-group">
            <label for="img"><b>Foto de Perfil</b></label>
            <input name="img" type="file" id="img">
        </div>
        <div class="form-group">
            <label for="nombre"><b>Nombre(s) del Docente</b></label>
            <input name="nombre" id="nombre" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="apellido"><b>Apellidos del Docente</b></label>
            <input name="apellido" type="text" class="form-control" id="apellido">
        </div>
        <div class="form-group">
            <label for="titulo"><b>Títulos del Docente</b></label>
            <input name="titulo" type="text" class="form-control" id="titulo">
        </div>
        <div class="form-group">
            <label for="curso"><b>Curso(s) Asociados</b></label>
            <input name="curso" type="text" class="form-control" id="curso">
        </div>

        {{-- <div class="form-group">
            <label for="imagendocente"><b>Añadir Imagen</b></label>
            <br>
            <input name="imagen" type="file" id="imagendocente">
        </div> --}}
        <button type="submit" class="btn btn-danger"><b>Yamete Kudasai niyaaah</b></button>
    </form>
@endsection
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body> --}}
{{-- Bootstrap requiere un div container para mostrar
            los elementos centrados y ordenados --}}
{{-- <div class="container">
            <br>
            <h3><b>Crear Nuevo docente</b></h3>
            <form action="/docentes" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombre"><b>Nombre del docente</b></label>
                    <input name="nombre" id="nombre" type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="descripciondocente"><b>Descripción del docente</b></label>
                    <input name="descripcion" type="text" class="form-control" id="descripciondocente">
                </div>
                <button type="submit" class="btn btn-danger"><b>Yamete Kudasai niyaaah</b></button>
            </form>
        </div>
    </body>
</html> --}}
