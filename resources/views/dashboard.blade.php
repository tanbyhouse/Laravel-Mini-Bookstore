@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <style>
        .stat-cards { display: flex; gap: 20px; margin-top: 25px; }
        .card { flex: 1; background: linear-gradient(180deg,#fff3f7,#ffe6f0); border: 1px solid #ffd6e8; padding: 20px; border-radius: 12px; box-shadow: 0 6px 18px rgba(240,82,150,0.06); }
        .card h3 { margin-top: 0; color: #93304b; font-weight: 700; }
        .card p { font-size: 2.2rem; font-weight: 800; margin: 10px 0 0; color: #661635; }
        .card.low-stock p { color: #c42b59; }
        h1 { color: #b02a57; }
        p.lead { color: #8b2b4a; }
    </style>

    <h1>Welcome, {{$username}}! </h1>
    <p class="lead">Explore Tan's Mini Bookstore Dashboard</p>

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