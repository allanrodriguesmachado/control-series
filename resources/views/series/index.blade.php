<x-layout title="Listar Series">
    <h3>Series</h3>

    <ul>
        @foreach($series AS $serie)
            <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>
