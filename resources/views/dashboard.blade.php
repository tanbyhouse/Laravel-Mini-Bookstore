@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @php
        $username = request()->query('username', 'Captain');
    @endphp

    <h1>Welcome, {{$username}}! </h1>
    <p>Explore Tan's Mini Bookstore Dashboard</p>
@endsection