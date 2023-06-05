@extends('templantes.templante')

@section('content')

<h3 class="text-center">Informações do Livro</h3>
<div class="col-8 m-auto">
    @php
    $user=$book->find($book->id)->relUsers;
    @endphp

    Título: {{$book->title}}<br>
    Preço: {{$book->price}}<br>
    Autor: {{$user->name}}<br>
    Contato do autor: {{$user->email}}<br>
</div>
@endsection