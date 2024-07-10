<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyeprmotos/login</title>
    @vite('resources/css/app.css')
    
</head>
<body>
    <h1>LISTA DE PRODUCTOS MAS VENDIDOS DE LA WEB</h1>

    <ul>
      @foreach ($productos as $producto)
            <li>
                {{$producto ["nombre"] }}
                ${{$producto ["Precio"] }}
            </li> 
      @endforeach

    </ul>
</body>
</html>