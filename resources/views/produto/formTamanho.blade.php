@extends('layouts.base')

@section('content')




<h1> Editar Produto</h1>

<h2>
    {{
        ($produtoTamanho)?
        'editar Tamanho' :
        'Cadastrar Tamanho'
    }}
</h2>




<form action="{{
($produtoTamanho)?
route('produto.updateTamanho'):
route('produto.storeTamanho',['id_produto'=>$produto->id_produto])
 }}"
method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-md-3">
            <label class="form-label" for="id_tamanho">Tamanho*</label>
            <select class="form-select" name="id_tamanho" id="id_tamanho" required>

                @foreach ($tamanhos::orderby('tamanho')->get() as $item)

                    <option value="{{ $item->id_tamanho }}"
                    @selected( ($produtoTamanho && $produtoTamanho == $item->id_tamanho)? true : false )>
                        {{$item->tamanho}}
                    </option>

                @endforeach

            </select>
        </div>

        <div class="col-md-3">
            <label class="form-label" for="preco">
                Preço
            </label>
            <input class="form-control" type="number" name="preco" id="preco" step="0.01" min="0" value="{{($produtoTamanho)? produtoTamanho->preco : old('preco')}}"
            required>
        </div>

        <div class="col-12">
            <label for="observacoes" class="form-label">Observações</label>
            <textarea name="observacoes" id="observacoes" cols="30" rows="10" class="form-control">{{($produtoTamanho)?produtoTamanho->observacoes :old('observacoes')}}</textarea>
        </div>
    </div>

    @if ($produtoTamanho)
        <input type="submit" class="btn btn-primary" value="Atualizar tamanho produto">
    @else
        <input type="submit" class="btn btn-primary" value="Cadastrar tamanho produto">
    @endif




</form>

@endsection

@section('scripts')




@endsection
