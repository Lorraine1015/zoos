<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Animales</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Animales</h1>
    <a href="{{ route('animals.create') }}">
    Crear un nuevo  animal
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero de identificacion</th>
                <th>Genero</th>
                <th>Año de nacimiento</th>
                <th>Pais</th>
                <th>Continente</th>
                <th>Especie</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $item)
                <tr>
                    <td>
                        <!--<a href="/zoos/{{ $zoo->id }}"> Otra opcion para crear un link ligado a lo que es una variable -->
                        
                     {{ $item->id }}  
                    </td>
                    <td>{{ $item->id_number }}</td>
                    <td>{{ $item->genre }}</td>
                    <td>{{ $item->birth_date }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->continent }}</td>
                    <td>{{ $item->species->vulgar_name }}</td>
                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>