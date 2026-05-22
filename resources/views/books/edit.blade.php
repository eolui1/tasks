@extends('layouts.app')

@section('content')

<h1>Editar Livro</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Título</label><br>
    <input type="text" name="title" value="{{ $book->title }}"><br><br>

    <label>Autor</label><br>
    <input type="text" name="author" value="{{ $book->author }}"><br><br>

    <label>ISBN</label><br>
    <input type="text" name="isbn" value="{{ $book->isbn }}"><br><br>

    <label>Páginas</label><br>
    <input type="number" name="pages" value="{{ $book->pages }}"><br><br>

    <label>Preço</label><br>
    <input type="number" step="0.01" name="price" value="{{ $book->price }}"><br><br>

    <button type="submit">
        Salvar Alterações
    </button>

</form>

@endsection