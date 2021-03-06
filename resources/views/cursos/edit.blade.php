@extends('Layouts.app')

@section('titulo', 'editar')

@section('contenido')
    <br>
    <center>
        <h3><b>Editar</b></h3>
    </center>
    {{-- se utiliza el comando enctype para subir archivos --}}
    <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="nombrecurso"><b>Modificar Nombre</b></label>
            <input name="nombre" id="nombrecurso" type="text" value="{{$cursito->nombre}}" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="descriptioncurso"><b>Modifiar Descripción</b></label>
            <input name="description" type="text" value="{{$cursito->description}}" class="form-control" id="descriptioncurso">
        </div>
        <div class="form-group">
            <label for="horas"><b>Modifiar Horas</b></label>
            <input name="horas" type="text" value="{{$cursito->horas}}" class="form-control" id="horascurso">
        </div>
        <div class="form-group">
            <label for="img"><b>Actualizar Imagen</b></label>
            <input name="img" type="file" value="{{$cursito->img}}" id="img">
        </div>
        <button type="submit" class="btn btn-danger"><b>Yamete Kudasai (Actualizar)</b></button>
    </form>
@endsection
