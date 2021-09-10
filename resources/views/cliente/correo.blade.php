@extends('plantillamaestra')

@section('seccion')
<h1>Detalles de los clientes</h1>
<p>Nombre {{ $cliente->nombre}} </p>
<p>Apellido {{ $cliente->apellido}} </p>
<p>Correo {{ $cliente->correo}} </p>
<p>Telefono {{ $cliente->telefono}} </p>

@endsection