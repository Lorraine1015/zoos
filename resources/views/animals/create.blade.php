<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nuevo animal</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo animal</h1>
    <form method="POST" action="{{ route('animals.store') }}">
        @csrf
        <p>Número de identificación</p>
        <input type="text" value="" name="animals[id_number]">
        <p>Género</p>
        <input type="text" value="" name="animals[genre]">
        <p>Año de nacimiento</p>
        <input type="text" value="" name="animals[birth_year]">
        <p>País</p>
        <input type="text" value="" name="animals[country]">
        <p>Continente</p>
        <input type="text" value="" name="animals[continent]">
        <p> Especie </p>
        <select name="animals[species_id]">
            @foreach($species as $item)
                <option value="{{ $item->id }}">{{$item->vulgar_name}}</option>
            @endforeach
        </select>
        <input type="submit">
    </form>
</body>
</html>