<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Editar</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar zoo</h1>
    <form method="POST" action="{{route('zoos.update',['zoo'=>$zoo]) }}">
        @csrf
        {{method_field('PUT')}}
        <p> Nombre </p>
        <input type="text" name="nombre" value="{{$zoo->name}}">
        <p> Ciudad </p>
        <input type="text" name="ciudad" value="{{$zoo->city}}">
        <p> País </p>
        <input type="text" name="pais" value="{{$zoo->country}}">
        <p> Tamaño </p>
        <input type="text" name="tamaño" value="{{$zoo->size}}">
        <p> Presupuesto </p>
        <input type="text" name="presupuesto" value="{{$zoo->annual_budget}}">
        <p> </p>
        <input type="submit" value="Editar">
    </form>
</body>
</html>


    