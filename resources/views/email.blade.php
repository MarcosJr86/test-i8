<!DOCTYPE html>
<html>

<head>
    <title>EMAIL ENVIADO POR QUEUE</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            color: deepskyblue;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>EMAIL ENVIADO POR QUEUE</h1>
    <p>
        Hola, estos son los usuarios registrados.
    </p>

    @if(count($user)>0)

    <ul>
        @foreach ($user as $usuario)
        <li>
            <b>NOMBRE:</b>{{$usuario->name}} &nbsp; <b>CORREO</b> {{$usuario->email}}
        </li>
        @endforeach

    </ul>
    @else
    <h1>No hay usuarios</h1>
    @endif
</body>

</html>