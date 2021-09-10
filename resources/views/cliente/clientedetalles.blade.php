@extends('plantillamaestra')

@section('seccion')
<h1>Detalles de los clientes</h1>
<p>Nombre {{ $cliente->nombre}} </p>
<p>Apellido {{ $cliente->apellido}} </p>
<p>Correo {{ $cliente->correo}} </p>
<p>Telefono {{ $cliente->telefono}} </p>


<form action="{{$cliente->id}}" method="POST">
    @method('PUT')
    @csrf <!-- lo anterior es para evitar bots que puedan introducirse al sitio web -->
    <input type="text" name="nombre" value="{{ $cliente->nombre}}" class="form-control mb-2">
    <input type="text" name="apellido" value="{{ $cliente->apellido}}" class="form-control mb-2">
    <input type="text" name="correo" value="{{ $cliente->correo}}" class="form-control mb-2">
    <input type="text" name="telefono" value="{{ $cliente->telefono}}" class="form-control mb-2">
    <button class="button button-primary btn-block" type="submit">Modificar</button>
</form>

<form action="{{$cliente->id}}" method="post">
@method('DELETE')
@csrf 
    <button class="button button-primary btn-block" type="submit" value="Borrar">Borrar</button>
</form>

@endsection