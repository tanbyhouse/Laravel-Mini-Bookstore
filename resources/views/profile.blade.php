@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <style>
        .profile-info { list-style-type: none; padding-left: 0; color: #6b0f3a; }
        .profile-form { margin-top: 30px; border-top: 1px solid #ffe0ef; padding-top: 20px; max-width: 480px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 700; color:#7a1a3a; }
        .form-group input { width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #f2cfe0; border-radius: 6px; background:#fff7fb; }
        .btn-update { padding: 10px 15px; background: linear-gradient(90deg,#ff6aa6,#ff3b8a); color: white; border: none; border-radius: 8px; cursor: pointer; font-weight:700; }
        .alert { padding: 12px; margin-bottom: 20px; border-radius: 6px; }
        .alert-success { background-color: #e6ffef; color: #165d30; border: 1px solid #c7efd4; }
        .alert-error { background-color: #ffe6f0; color: #7a122f; border: 1px solid #ffcee1; }
        h1 { color:#b02a57; }
    </style>

    <h1>Profile Page</h1>
    <p>{{$username}}'s Profile Information:</p>

    <ul style="list-style-type: none; padding-left: 0;">
        <li><strong>Username:</strong> {{ $username }}</li>
        <li><strong>Status:</strong> Bookstore Owner</li>
        <li><strong>Joined:</strong> November 22, 2022</li>
    </ul>
    </div>
@endsection