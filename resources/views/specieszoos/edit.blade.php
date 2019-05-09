<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Editar</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar species </h1>
    {{$zoo->name}}
    <form method='POST' action="{{route('zoos.species.update',['zoo'=>$zoo]) }}">
    @csrf
        {{method_field('PUT')}}
    <form>
    <ul>
    @foreach($species as $item)
            <li>
                <input type="checkbox" name="species[]" value="{{ $item->id}}">
                {{$item->vulgar_name}}
            </li>
    @endforeach
    </ul>
    <input type="submit" value="Guardar">

    </form>
</body>
</html>
