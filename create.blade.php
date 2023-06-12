@extends('templantes.templante')

@section('content')

<h3 class="text-center">@if(isset($book)) Editar @else Cadastrar @endif Livro</h3>
<div class="col-8 m-auto">
    <form method="post" name="formCad" id="formCad" action="{{ url('lista') }}">
        <!-- @csrf -->
        @method('POST')
        <select class="form-control form-select form-select-sm" name="id_user" id="id_user" aria-label=".form-select-sm example">
            <option selected>Selecione o Autor</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <input class="form-control form-control-sm" type="text" name="title" id="title" placeholder="Título" aria-label=".form-select-sm example">
        <input class="form-control form-control-sm" type="text" name="price" id="price" placeholder="Preço" aria-label=".form-select-sm example">
        <input class="btn btn-primary" type="submit" value="Cadastrar">

    </form>
</div>
@endsection