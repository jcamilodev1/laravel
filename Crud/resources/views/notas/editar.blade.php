@extends('plantilla')

@section('seccion')
  <h1>Editar nota</h1>
  @if ( session('mensaje') )
            <div class="alert alert-success">{{session('mensaje')}}</div>
        @endif
  <form method="POST" action="{{route('notas.update',$nota->id)}}">
  @method('PUT')
    @csrf
    @error('nombre')
    <div class="alert alert-danger">el nombre es obligatorio</div>
    @enderror
    @error('descripcion')
    <div class="alert alert-danger">la descripcion es obligatorio</div>
    @enderror
    <input
    type="text"
    name="nombre"
    placeholder="Nombre"
    class="form-control mb-2"
    value="{{$nota->nombre}}"
  />
  
  <input
    type="text"
    name="descripcion"
    placeholder="Descripcion"
    class="form-control mb-2"
    value="{{$nota->descripcion}}"
  />
  <button class="btn btn-warning btn-block" type="submit" >Editar</button>
</form>
@endsection