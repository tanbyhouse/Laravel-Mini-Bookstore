@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <h1>Profile Page</h1>
    <p>{{$username}}'s Profile Information:</p>

    <ul style="list-style-type: none; padding-left: 0;">
        <li><strong>Username:</strong> {{ $username }}</li>
        <li><strong>Status:</strong> Bookstore Owner</li>
        <li><strong>Joined:</strong> November 22, 2022</li>
    </ul>
@endsection