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
    <!--<a href="{{ route('animals.create') }}">
    Crear un nuevo  zoologico-->
    </a>
    <table>
        <thead>
            <tr>
                <th>Id_number</th>
                <th>Genre</th>
                <th>Birth_year</th>
                <th>Country</th>
                <th>Continent</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zoos as $zoo)
                <tr>
                    <td>
                        <!--<a href="/zoos/{{ $zoo->id }}"> Otra opcion para crear un link ligado a lo que es una variable -->
                        <a href="{{route('zoos.show',['zoo'=>$zoo]) }}">
                    {{ $zoo->id }}
                        </a>
                    </td>
                    <td>{{ $zoo->name }}</td>
                    <td>{{ $zoo->city }}</td>
                    <td>{{ $zoo->country }}</td>
                    <td>{{ $zoo->size }}</td>
                    <td>{{ $zoo->annual_budget }}</td>
                    <td>
                    <a href="{{route('zoos.edit',['zoo'=>$zoo]) }}">Editar </a>
                    <form method ="POST" action="{{route('zoos.delete',['zoo'=>$zoo]) }}">
                    @csrf 
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>