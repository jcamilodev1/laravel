@extends('plantilla')

@section('seccion')

<h1>detalle de nota</h1>
<h4>Nombre: {{$nota->nombre}}</h4>
<h4>descripcion: {{$nota->descripcion}}</h4>

<h4>ID: {{$nota->id}}</h4>

@endsection