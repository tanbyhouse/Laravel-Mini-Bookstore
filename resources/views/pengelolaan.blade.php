@extends('layouts.app')

@section('title', 'Book Management')

@section('content')
    <style>
        .book-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .book-table th, .book-table td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .book-table th { background-color: #f2f2f2; }
        .book-table tr:nth-child(even) { background-color: #f9f9f9; }
        .book-table tr:hover { background-color: #f1f1f1; }
    </style>

    <h1>Book Inventory Management</h1>
    <p>This is a page to manage books in Tan's inventory</p>

    <table class="book-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Stok</th>
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