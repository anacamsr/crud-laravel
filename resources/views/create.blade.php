@extends('templantes.templante')

@section('content')

<h3 class="text-center mt-4">@if(isset($book)) Editar @else Cadastrar @endif Livro</h3>
<div class="col-8 m-auto">
   @if(isset($book))
    <form method="post" name="formEdit" id="formEdit" action="{{ route('books.update', ['id' => $book->id]) }}">
    @else
    <form method="post" name="formCad" id="formCad" action="{{  route('books.store')}}">
    @endif

        @csrf 
        @method('POST')
        <select class="form-control form-select form-select-sm" name="id_user" id="id_user" aria-label=".form-select-sm example">
        <option selected value="{{ $book->relUsers->id ?? '' }}">{{ $book->relUsers->name ?? 'Selecione um usuário' }}</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <input class="form-control form-control-sm mt-2" type="text" name="title" id="title" value="{{$book->title ?? ''}}" placeholder="Título" aria-label=".form-select-sm example">
        <input class="form-control form-control-sm mt-2" type="text" name="price" id="price" value="{{$book->price ?? ''}}" placeholder="Preço" aria-label=".form-select-sm example">
        <button class="btn btn-primary mt-2" type="submit">
            @if(isset($book)) Editar @else Cadastrar @endif Livro
        </button>
    </form>
</div>
@endsection