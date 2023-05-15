<x-layout title="Criar Série">
    <form action="{{route('series.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input class="form-control" type="text" id="nome" name="nome">
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
</x-layout>
