@extends('layouts.base')
@section('content')

<h1>Cargos</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Cargo</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($cargos as $cargo)


        <tr>
            <td>
                <a href="{{ route('cargo.edit', ['id'=>$cargo->id_cargo]) }}">Editar</a>
                <a href="{{ route('cargo.show', ['id'=>$cargo->id_cargo]) }}">Ver</a>
                <a href="{{ route('cargo.destroy', ['id'=>$cargo->id_cargo]) }}">Excluir</a>
            </td>
            <td>{{$cargo->id_cargo}}</td>
            <td>{{$cargo->cargo}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
@section('script')
@endsection
