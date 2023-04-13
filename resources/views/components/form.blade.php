<div>
    <form action="{{$action}}" method="post" class="form-row mt-3 d-flex align-items-center">
        @csrf

        @if($update)
            @method('PUT')
        @endif
        <div class="form-group m-2">
            <label for="nome" class="text-light fw-bold">Adicionar Série:</label><input
                type="text"
                id="nome"
                name="nome"
                class="form-control form-control-user "
                placeholder="Nome da série"
                @isset($nome)value="{{$nome}}"@endisset>
            />
        </div>

        <x-button propsButton='Adicionar'></x-button>
    </form>
</div>
