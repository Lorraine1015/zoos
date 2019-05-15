<h1>{{ $zoo->name }}</h1>
<p>Modificar las especies</p>
<form method="POST" action="{{ route('zoos.species.update', ['zoo' => $zoo]) }}">
    @csrf
    {{ method_field('PUT') }}
    <ul>
    @foreach($species as $item)
        <li>
            <input type="checkbox" name="species[]" value="{{ $item->id }}">
            {{ $item->vulgar_name }}
        </li>
    @endforeach
    </ul>
    <input type="submit" value="Guardar">
</form>
