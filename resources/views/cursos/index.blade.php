@extends('Layouts.app')

@section('titulo', 'Listado de cursos')

@section('contenido')

    <center>
        <h3>Listado de cursos disponibles</h3>
    </center>
    {{-- foreach es un ciclo especial para arrays
    recorderis: existen ciclos como while, for, do while, foreach --}}
    <div class="row">
        @foreach ($cursito as $co)
            {{-- para llamar información de php basta con interpolar las variables
usando la doble llave --}}


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Storage::url($co->img) }}" class="card-img-top mx-auto d-block" alt="..."
                        style="width: 50%; margin: 5%;">
                    <div class="card-body">
                        <li class="list-group-item">{{ $co->nombre }}</li>
                        <li class="list-group-item">{{ $co->horas }}</li>

                        {{-- <li class="list-group-item">{{ $co->description }}</li> --}}
                        <br>
                        <center>
                            <a href="/cursos/{{ $co->id }}" class="btn btn-dark">Yamete!!!</a>
                        </center>
                    </div>
                </div>
            </div>

            <br>
        @endforeach
    </div>
@endsection
