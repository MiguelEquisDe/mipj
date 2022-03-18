{{-- para poder heredar la plantilla nesecito usar @extends --}}
@extends('Layouts.app')

@section('titulo', 'Crear registro')

@section('contenido')
    <br>
    <center>
        <h3><b>Crear Nuevo Curso</b></h3>
    </center>
    {{-- se utiliza el comando enctype para subir archivos --}}
    <form action="/cursos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombrecurso"><b>Nombre del Curso</b></label>
            <input name="nombre" id="nombrecurso" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="descripcioncurso"><b>Descripción del Curso</b></label>
            <input name="descripcion" type="text" class="form-control" id="descripcioncurso">
        </div>
        <div class="form-group">
            <label for="img"><b>Imagen del Curso</b></label>
            <input name="img" type="file" id="img">
        </div>
        {{-- <div class="form-group">
            <label for="imagencurso"><b>Añadir Imagen</b></label>
            <br>
            <input name="imagen" type="file" id="imagencurso">
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
            <h3><b>Crear Nuevo Curso</b></h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso"><b>Nombre del Curso</b></label>
                    <input name="nombre" id="nombrecurso" type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="descripcioncurso"><b>Descripción del Curso</b></label>
                    <input name="descripcion" type="text" class="form-control" id="descripcioncurso">
                </div>
                <button type="submit" class="btn btn-danger"><b>Yamete Kudasai niyaaah</b></button>
            </form>
        </div>
    </body>
</html> --}}
