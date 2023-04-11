<x-layout title="Cadastrar serie">
    <form action="{{route('series.store')}}" method="POST">
        @csrf
        <label for="nome">Cadastrar Nova serie</label>
        <input type="text" id="nome" name="nome" required>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>

</x-layout>
