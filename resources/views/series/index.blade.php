<x-layout title="Listar Series">
    <h3>Series</h3>

    <ul>
        @foreach($series AS $serie)
            <li>{{$serie->name}}</li>
        @endforeach
    </ul>

        <a class="btn btn-danger" href="create">Criar</a>
</x-layout>
