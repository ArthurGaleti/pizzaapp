@extends('layouts.base')
@section('content')


<h1>Cargo: {{ $cargo->cargo }}</h1>
<h2> Relação ao usuário com esse cargo</h2>

<table>
    <thead>
        <tr>
            <th>Ação</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="">Editar</a></td>
            <td><a href="">Ver</a></td>
        </tr>
    </tbody>
</table>

@endsection
@section('script')
@endsection
