@extends('Layouts.app')

@section('titulo', 'detalle curso')

@section('contenido')
    <form class="form-group" action="/docentes/{{ $doc->id }}" method="POST">
        <img src="{{ Storage::url($doc->img) }}" class="card-img-top mx-auto d-block" alt="..."
            style="width: 80%; margin: 5%;">
        <center>
            <div class="card" style="width: 18rem;">
                <li class="list-group-item">{{ $doc->nombres }}</li>
                <li class="list-group-item">{{ $doc->apellido }}</li>
                <li class="list-group-item">{{ $doc->titulo }}</li>
                <li class="list-group-item">{{ $doc->cursoasociado }}</li>
                <a href="/docentes/{{ $doc->id }}/edit" class="btn btn-dark">Editar</a>
                @csrf
                @method ('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </center>
    </form>
@endsection
