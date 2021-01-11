@extends('layouts.textPlantilla')

@section('contenido')
    <h1>Listado de regiones</h1>

    <ul class="list-group col-6 mx-auto">
        @foreach ($regiones as $region)
            <li class="list-group-item">{{ $region -> regNombre }}</li>
        @endforeach
    </ul>

@endsection
