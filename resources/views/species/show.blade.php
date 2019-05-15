<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $species->vulgar_name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>{{ $species->vulgar_name }}</h1>
    <p>{{ $species->scientific_name }}</p>
    <h2>Animales</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de identificación</th>
                <th>Género</th>
                <th>Año de nacimiento</th>
                <th>País</th>
                <th>Continente</th>
                <th>Especie</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($species->animals as $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>{{ $item->id_number }}</td>
                    <td>{{ $item->genre }}</td>
                    <td>{{ $item->birth_date }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->continent }}</td>
                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p><a href="{{ route('species.index') }}">Regresar al listado</a></p>
</body>
</html>