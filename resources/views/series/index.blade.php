<x-layout title="Séries">
    <ul class="list-group">
        @foreach($series AS $serie)
            <li class="list-group-item">{{$serie->nome}}</li>
        @endforeach
    </ul>

    <a class="btn btn-success m-1" href="{{route('series.create')}}">Adicionar</a>
</x-layout>

