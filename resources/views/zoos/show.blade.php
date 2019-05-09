
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Editar</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>{{ $zoo->name }}</h1>
    {{ $zoo->id }}
    <p><a href="{{route('zoos.index')}}">Regresar al listado
    <ul>
    @foreach($zoo->species as $item)
            <li>
                {{$item->vulgar_name}}
            </li>
    @endforeach
    </ul>
</body>
</html>
