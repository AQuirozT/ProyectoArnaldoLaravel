@extends('plantillamaestra')

@section('seccion')
<h1>Bienvenido a mi pyme</h1>
<p>quienes conforman esta pyme son:</p>

    @foreach($equipo as $item)
    <a href="{{ route('mipyme', $item) }}" class="h4 text-danger"> {{$item}} </a></br>
    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre=='Pedro')
            <p>El nombre es {{$nombre}}</p>
            @break

            @case($nombre=='Juan')
            <p>El nombre es {{$nombre}}</p>
            @break

            @case($nombre=='Diego')
            <p>El nombre es {{$nombre}}</p>
            @break
        @endswitch
    @endif

@endsection