<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New page</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nueva especie</h1>
    <form method="POST" action="{{route('species.store')}}">
        @csrf
        <p> Nombre vulgar </p>
        <input type="text" name="species[vulgar_name]" value="">
        <p> Nombre cientifico </p>
        <input type="text" name="species[scientific_name]" value="">
        <p> Family </p>
        <input type="text" name="species[family]" value="">
        <p> Peligro de extincion </p>
        <input type="text" name="species[is_on_danger]" value="">
        <p> </p>
        <input type="submit">
    </form>
</body>
</html>

