<x-layout title="Listar Series">

    <div class="card">
        <div class="card-header">
            <h5>Series</h5>
        </div>
        <div class="card-body">
            <ul class="text-decoration-none">
                @foreach($series AS $serie)
                    <li>{{$serie->nome}}</li>
                @endforeach
            </ul>
        </div>

        <div class="card-footer d-flex justify-content-end align-items-center">
            <a href="{{route('series.create')}}" class="btn btn-success text-light">Nova serie</a>
        </div>
    </div>



</x-layout>
