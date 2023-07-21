<ul>
    <li>
        <a href="{{route('produto.index')}}">
            Todos os produtos
        </a>
    </li>

    <li>
        <a href="{{route('produto.edit', ['id'=>$produto->id_produto])}}">Editar</a>
    </li>
</ul>
