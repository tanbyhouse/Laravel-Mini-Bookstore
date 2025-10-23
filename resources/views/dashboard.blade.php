@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <style>
        .stat-cards { display: flex; gap: 20px; margin-top: 25px; }
        .card { flex: 1; background-color: #f9f9f9; border: 1px solid #ddd; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .card h3 { margin-top: 0; color: #555; }
        .card p { font-size: 2.5rem; font-weight: bold; margin: 10px 0 0; color: #333; }
        .card.low-stock p { color: #d9534f; }
    </style>

    <h1>Welcome, {{$username}}! </h1>
    <p>Explore Tan's Mini Bookstore Dashboard</p>

    <div class="stat-cards">
        <div class="card">
            <h3>Book Title in Inventory</h3>
            <p>{{ $totalJudul }}</p>
        </div>
        <div class="card">
            <h3>Books Stock</h3>
            <p>{{ $totalStok }}</p>
        </div>
        <div class="card low-stock">
            <h3>Stocks Running Low (&lt;10)</h3>
            <p>{{ $stokMenipis }}</p>
        </div>
    </div>
@endsection