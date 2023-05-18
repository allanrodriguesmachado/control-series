<x-layout title="Séries">

    @isset($mensagemSucesso)
        <div class="alert alert-danger">{{$mensagemSucesso}}</div>
    @endisset

    <ul class="list-group">
        @foreach($series AS $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{route('seasons.index', $serie->id)}}">{{$serie->nome}}</a>
                <span class="d-flex">
                    <a href="{{route('series.edit', $serie->id)}}" class="btn btn-primary">Editar</a>

                    <form action="{{route('series.destroy', $serie->id)}}" class="ms-2" method="post">
                        @csrf
                            @method('DELETE')
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>

    <a class="btn btn-success m-1" href="{{route('series.create')}}">Adicionar</a>
</x-layout>

