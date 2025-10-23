@extends('layouts.app')

@section('title', 'Book Management')

@section('content')
    <style>
        .book-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .book-table th, .book-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .book-table th { background-color: #f2f2f2; }
        .book-table tr:nth-child(even) { background-color: #f9f9f9; }
        .book-table tr:hover { background-color: #f1f1f1; }

        .search-form { margin-bottom: 20px; }
        .search-form input[type="text"] { width: 300px; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        .search-form button { padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>

    <h1>Book Inventory Management</h1>

    <form action="/pengelolaan" method="GET" class="search-form">
        <input type="text" name="search" placeholder="Search Book Title..." value="{{ $searchTerm ?? '' }}">
        <button type="submit">Search</button>
    </form>

    <table class="book-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($buku as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['penulis'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Data buku masih kosong.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection