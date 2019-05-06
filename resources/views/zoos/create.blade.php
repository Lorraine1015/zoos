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
    <form method="POST" action="{{route('zoos.store')}}">
        @csrf
        <p> Nombre </p>
        <input type="text" name="nombre" value="">
        <p> Ciudad </p>
        <input type="text" name="ciudad" value="">
        <p> País </p>
        <input type="text" name="pais" value="">
        <p> Tamaño </p>
        <input type="text" name="tamaño" value="">
        <p> Presupuesto </p>
        <input type="text" name="presupuesto" value="">
        <p> </p>
        <input type="submit">
    </form>
</body>
</html>

