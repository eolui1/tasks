@extends('layouts.app')

@section('title', 'Lista de Livros')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>📖 Livros Cadastrados</h1>
    <a href="{{ route('books.create') }}" class="btn btn-success">+ Novo Livro</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>ISBN</th>
            <th>Páginas</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->pages }}</td>
            <td>R$ {{ number_format($book->price, 2, ',', '.') }}</td>
            <td>
                <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Tem certeza?')">Excluir</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="text-center">Nenhum livro cadastrado</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection