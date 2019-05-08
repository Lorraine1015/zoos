<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>species</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Species</h1>
    <a href="{{ route('species.create') }}">
    Crear una nueva especie
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre vulgar</th>
                <th>Nombre cientifico</th>
                <th>Familia</th>
                <th>Peligro de extincion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($species as $specie)
                <tr>
                    <td>
                        
                        <a href="{{route('species.show',['species'=>$specie]) }}">
                    {{ $species->id }}
                        </a>
                    </td>
                    <td>{{ $species->vulgar_name }}</td>
                    <td>{{ $species->scientific_name }}</td>
                    <td>{{ $species->family}}</td>
                    <td>{{ $species->is_on_danger }}</td>
                    
                    <td>
                    <a href="{{route('species.edit',['species'=>$specie]) }}">Editar </a>
                    <form method ="POST" action="{{route('species.delete',['species'=>$specie]) }}">
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