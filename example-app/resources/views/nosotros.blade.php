@extends("plantilla");

@section("seccion")

  <h1>ESte es mi equipo de trabajo</h1>
  @foreach($equipo as $item) 

  <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a>
  <br>

  @endforeach
  
  @if(!empty($nombre))
    @switch($nombre)
      @case($nombre == 'ignacio')
        <h2 class="mt-5">El nombre es {{$nombre}}</h2>
        <p>{{$nombre}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas atque, tenetur architecto repellat distinctio explicabo obcaecati iure sed, rem, id magni voluptatum laboriosam inventore unde corrupti? Nam, quia aspernatur?</p>
        @break
        @case($nombre == 'camilo')
        <h2 class="mt-5">El nombre es {{$nombre}}</h2>
        <p>{{$nombre}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas atque, tenetur architecto repellat distinctio explicabo obcaecati iure sed, rem, id magni voluptatum laboriosam inventore unde corrupti? Nam, quia aspernatur?</p>
        @break
        @case($nombre == 'pedro')
        <h2 class="mt-5">El nombre es {{$nombre}}</h2>
        <p>{{$nombre}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas atque, tenetur architecto repellat distinctio explicabo obcaecati iure sed, rem, id magni voluptatum laboriosam inventore unde corrupti? Nam, quia aspernatur?</p>
        @break
    @endswitch
  @endif
@endsection()