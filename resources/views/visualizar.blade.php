@extends('templantes.templante')

@section('content')
<div class="col-8 m-auto custom-background mt-5">

    <h3 class="text-center">Informações do Livro</h3>
    <div>
        @php
        $user=$book->find($book->id)->relUsers;
        @endphp

        <b>Título:</b> {{$book->title}}<br>
        <b>Preço:</b> {{$book->price}}<br>
        <b>Autor:</b> {{$user->name}}<br>
        <b>Contato do autor:</b> {{$user->email}}<br>
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
@endsection