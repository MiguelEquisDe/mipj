@extends('Layouts.app')

@section('titulo', 'detalle curso')

@section('contenido')

    <img src="{{ Storage::url($cursito->img) }}" class="card-img-top mx-auto d-block" alt="..."
        style="width: 80%; margin: 5%;">
    <center>
        <div class="card" style="width: 18rem;">
            <li class="list-group-item">{{ $cursito->nombre }}</li>
            <li class="list-group-item">{{ $cursito->description }}</li>
            <a href="/cursos/{{ $cursito->id }}/edit" class="btn btn-dark">Editar</a>
        </div>
    </center>
@endsection
