<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New page</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Una nueva pagina</h1>
    <form method="POST" action="{{route('species.store')}}">
        @csrf
        <p> Nombre vulgar </p>
        <input type="text" name="nombre" value="">
        <p> Nombre cientifico </p>
        <input type="text" name="nombre_scien" value="">
        <p> Family </p>
        <input type="text" name="familia" value="">
        <p> Peligro de extincion </p>
        <input type="boolean" name="peligro" value="">
        <p> </p>
        <input type="submit">
    </form>
</body>
</html>

