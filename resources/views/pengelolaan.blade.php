@extends('layouts.app')

@section('title', 'Book Management')

@section('content')
    <style>
        .book-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .book-table th, .book-table td { border: 1px solid #ffd6e8; padding: 12px; text-align: left; }
        .book-table th { background-color: #ffdef0; color: #7a1a3a; }
        .book-table tr:nth-child(even) { background-color: #fff5f9; }
        .book-table tr:hover { background-color: #ffeaf3; }

        .search-form { margin-bottom: 20px; display:flex; gap:10px; align-items:center; }
        .search-form input[type="text"] { width: 320px; padding: 10px; border: 1px solid #f2cfe0; border-radius: 6px; background:#fff7fb; }
        .search-form button { padding: 10px 15px; background: linear-gradient(90deg,#ff6aa6,#ff3b8a); color: white; border: none; border-radius: 6px; cursor: pointer; font-weight:700; }
        h1 { color: #b02a57; }
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
                    <td colspan="4" style="text-align: center;">Inventory is empty TT TT</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection