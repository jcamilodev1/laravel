@extends('plantilla')

@section('seccion')

        <h1>Notas</h1>
        @if ( session('mensaje') )
            <div class="alert alert-success">{{session('mensaje')}}</div>
        @endif

        <form method="POST" action="{{route('notas.crear')}}">
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
    value="{{ old('nombre') }}"
  />
  
  <input
    type="text"
    name="descripcion"
    placeholder="Descripcion"
    class="form-control mb-2"
    value="{{ old('descripcion') }}"
  />
  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>


        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($notas as $nota)
    <tr>
      <th scope="row">{{ $nota->id }}</th>
      <td>
      <a href="{{route('notas.detalle', $nota)}}">
      {{ $nota->nombre }}
      </a>
      </td>
      <td>{{ $nota->descripcion }}</td>
      <td>
        <a class="btn btn-warning btn-sm"href="{{route('notas.editar', $nota)}}">Editar</a>
        <form action="{{route('notas.eliminar', $nota)}}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm" type=submit>-</button>
        </form>
      </td>
    </tr>
    <tr>
    @endforeach
  </tbody>
</table>
{{$notas->links()}}

@endsection

