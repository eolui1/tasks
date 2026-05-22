<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Listar todos os livros
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Mostrar formulário de criação
    public function create()
    {
        return view('books.create');
    }

    // Salvar novo livro
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required',
            'isbn' => 'required|unique:books',
            'pages' => 'required|integer',
            'price' => 'required|numeric'
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')
            ->with('success', 'Livro cadastrado com sucesso!');
    }

    // Mostrar um livro específico
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // Mostrar formulário de edição
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Atualizar livro
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required',
            'isbn' => 'required|unique:books,isbn,'.$book->id,
            'pages' => 'required|integer',
            'price' => 'required|numeric'
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')
            ->with('success', 'Livro atualizado com sucesso!');
    }

    // Excluir livro
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
            ->with('success', 'Livro excluído com sucesso!');
    }
}