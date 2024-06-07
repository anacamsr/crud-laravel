@extends('templantes.templante')

@section('content')
<div class="container-fluid">
    <!-- <div class="col-8 m-auto">
        <h2 class="text-left mt-4 mb-5" style="">Biblioteca de Livros</h2>
    </div> -->

    <div class="col-8 m-auto mt-5 custom-background">
        <form action="{{ route('books.search') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" name="author" id="author" class="form-control" placeholder="Nome do autor">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Título do livro">
                    </div>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-dark">Pesquisar</button>
                    <button type="button" class="btn btn-outline-secondary" onclick="resetAndSubmitForm()">Limpar</button>
                </div>
            </div>
        </form>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Autor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->user->name }}</td>

                    <td>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Ações
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="{{ route('books.show', ['id' => $book->id]) }}">Visualizar</a></li>
                                <li><a class="dropdown-item" href="{{ route('books.edit', ['id' => $book->id]) }}">Editar</a></li>
                                <li><a class="dropdown-item" href="{{ route('books.destroy', ['id' => $book->id]) }}">Deletar</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $books->links() }}
        </div>
    </div>
</div>
<style>
    .custom-background {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
</style>
<script>
    var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
    var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl);
    });

    function resetAndSubmitForm() {
        document.getElementById("author").value = "";
        document.getElementById("title").value = "";
        window.location.href = "{{ route('books.index') }}";
    }
</script>
@endsection