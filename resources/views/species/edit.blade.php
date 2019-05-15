<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Editar especie</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar especie</h1>
    <form method="POST" action="{{ route('species.update', ['species' => $species])}}">
        @csrf
        {{ method_field('PUT') }}
        <p>Nombre vulgar</p>
        <input type="text" value="{{ $species->vulgar_name }}" name="species[vulgar_name]">
        <p>Nombre científico</p>
        <input type="text" value="{{ $species->scientific_name }}" name="species[scientific_name]">
        <p>Familia</p>
        <input type="text" value="{{ $species->family }}" name="species[family]">
        <p>Esta en peligro</p>
        <input type="text" value="{{ $species->is_on_danger }}" name="species[is_on_danger]"><input type="submit" value="Editar">
    </form>
</body>
</html>