<x-layout title="Criar Série">
    <form action="{{route('series.store')}}" method="POST">
        @csrf


        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input autofocus class="form-control" type="text" id="nome" name="nome"
                       value="{{old('nome')}}">
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="form-label">N Temporadas:</label>
                <input class="form-control" type="text" id="seasonsQty" name="seasonsQty"
                       value="{{old('seasonsQty')}}">
            </div>

            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Eps/ Temporada:</label>
                <input class="form-control" type="text" id="episodesPerSeason" name="episodesPerSeason"
                       value="{{old('episodesPerSeason')}}">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
</x-layout>
