<x-layout title="Listar Series">

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
    @endisset


    <div class="card">
        <div class="card-header">
            <h5>Series</h5>
        </div>
        <div class="card-body">

            <ul class="text-decoration-none">
                @foreach($series AS $serie)
                    <li class="d-flex justify-content-between align-content-center m-2">
                        {{$serie->nome}}

                        <span class="d-flex">
                        <a href="{{route('series.edit', $serie->id)}}" class="btn btn-primary btn-sm ">Ed</a>
                        <form class="ms-2" action="{{route('series.destroy', $serie->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">X</button>
                        </form>
                    </span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card-footer d-flex justify-content-end align-items-center">
            <a href="{{route('series.create')}}" class="btn btn-success text-light">Nova serie</a>
        </div>
    </div>


</x-layout>
