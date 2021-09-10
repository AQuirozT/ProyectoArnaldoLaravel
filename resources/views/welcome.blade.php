<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

<div class="container my-4">
    <a href="{{route('inicio')}}" class="btn btn-primary">Inicio</a>
    <a href="{{route('blog')}}" class="btn btn-primary">Blog</a>
    <a href="{{route('cosas')}}" class="btn btn-primary">Cosas</a>
    <a href="{{route('mipyme')}}" class="btn btn-primary">Mi pyme</a>
</div>
<div class="container">
    @yield('seccion')
</div>

<form action="" method="post">
    @csrf <!-- lo anterior es para evitar bots que puedan introducirse al sitio web -->
    <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2">
    <input type="text" name="apellido" placeholder="apellido" class="form-control mb-2">
    <input type="text" name="correo" placeholder="correo" class="form-control mb-2">
    <input type="text" name="telefono" placeholder="telefono" class="form-control mb-2">
    <button class="button button-primary btn-block" type="submit">Agregar</button>
</form>

    <div class="container my-4">
        <h1 class="display-4"> Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">correo</th>
                    <th scope="col">telefono</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>
                        <a href="{{ route('clientes.clientedetalles', $item) }}">
                            {{$item->nombre}}
                        </a>
                    </td>
                    <td>
                            {{$item->apellido}}
                    </td>
                    <td>
                            {{$item->correo}}
                    </td>
                    <td>
                            {{$item->telefono}}
                    </td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>