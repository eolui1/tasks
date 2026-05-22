@extends('layouts.app')

@section('title', 'Cadastrar Livro')

@section('content')
<h1>📝 Cadastrar Novo Livro</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" name="author" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">ISBN</label>
        <input type="text" name="isbn" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Páginas</label>
        <input type="number" name="pages" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Preço</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection