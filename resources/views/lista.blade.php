@extends('templantes.templante')

@section('content')
<div class="container-fluid">
<div class="">
    <h2 class="text-center" style="text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15)">Biblioteca de Livros</h2>
</div>
<div class="" style="margin-left:77%">
    <a href="{{ url('/book/create') }}">
        <button type="button" class="btn btn-outline-success">Cadastrar</button>
    </a>
</div>
<div class="col-8 m-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Preço</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $books)
            <tr>
                <th scope="row">{{ $books->id }}</th>
                <td>{{ $books->title }}</td>
                <td>{{ $books->price }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ações
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li><a class="dropdown-item" href="{{ route('books.show', ['id' => $books->id]) }}">Visualizar</a></li>
                            <li><a class="dropdown-item" href="{{ route('books.edit', ['id' => $books->id]) }}">Editar</a></li>
                            <li><a class="dropdown-item" href="#">Deletar</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
<script>
// Initialize the Bootstrap dropdown component
var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
    return new bootstrap.Dropdown(dropdownToggleEl);
});
</script>
@endsection