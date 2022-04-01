@extends('Layouts.app')

@section('titulo', 'detalle curso')

@section('contenido')
    <form class="form-group" action="/cursos/{{ $cursito->id }}" method="POST">
        <img src="{{ Storage::url($cursito->img) }}" class="card-img-top mx-auto d-block" alt="..."
            style="width: 80%; margin: 5%;">
        <center>
            <div class="card" style="width: 18rem;">
                <li class="list-group-item">{{ $cursito->nombre }}</li>
                <li class="list-group-item">{{ $cursito->description }}</li>
                <li class="list-group-item">{{ $cursito->horas }}</li>
                <a href="/cursos/{{ $cursito->id }}/edit" class="btn btn-dark">Editar</a>
                @csrf
                @method ('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </center>
    </form>
@endsection
