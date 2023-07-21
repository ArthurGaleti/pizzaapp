@extends('layouts.base')
@section('content')

{{-- Menu --}}
@include('produto.partials.menu')
{{--/Menu --}}

<h1>Produto: {{ $produto->nome }}</h1>
<h2>Tipo: {{$produto->tipo->tipo}}</h2>
<p>Descrição: {{nl2br($produto->descricao)}}</p>
@if($produto->observacao)
    {!! nl2br($produto->observacao) !!}
@endif

<table class="table table-striped table-hover">
    <caption>
        <a href="{{ route('produto.createTamanho', ['id_produto'=>$produto->id_produto]) }}">
            Adicionar um tamanho
        </a>
    </caption>
    <thead>
        <tr>
            <th>Ação</th>
            <th>Tamanho</th>
            <th>Preco</th>
            <th>Obs.:</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($produto->tamanhos()->get() as $item)

        <tr>
            <td>
                {{-- editar --}}
                <a class="btn btn-primary" href="#">
                    <i class="bi bi-pencil-square"></i>
                </a>
            </td>
            <td>
               {!! $item->tamanho->tamanho !!}
            </td>
            <td>
                {{ $item->preco }}
            </td>
            <td>
                {!! nl2br ($item->observacoes) !!}
            </td>
        </tr>

        @empty

        <tr>
            <td colspan="4">
                Nenhum tamanho definido para esse produto
            </td>
        </tr>

        @endforelse
    </tbody>
</table>

@endsection
@section('script')
@endsection
