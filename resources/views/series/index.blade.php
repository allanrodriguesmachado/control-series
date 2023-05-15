<x-layout title="Séries">

    @isset($mensagemSucesso)
        <div class="alert alert-danger">{{$mensagemSucesso}}</div>
    @endisset

    <ul class="list-group">
        @foreach($series AS $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$serie->nome}}
                <form action="{{route('series.destroy', $serie->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">X</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a class="btn btn-success m-1" href="{{route('series.create')}}">Adicionar</a>
</x-layout>

