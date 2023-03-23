<x-layout title="Nova Série">
    <form action="/series/salvar" method="post" class="row g-3">
        @csrf
        <div class="col-auto col-6" >
            <label class="form-label fw-bold" for="nome">Nome: </label>
            <input class="form-control" type="text" id="nome" name="nome"/>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
    </form>

</x-layout>
