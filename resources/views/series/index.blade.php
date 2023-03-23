<x-layout title="Séries">

    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-dark " href="<?= url("/series/criar") ?>">Adicionar</a>
    </div>

    <ul class="list-group">
        @foreach ($series AS $serie)
            <li class="list-group-item">{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>
