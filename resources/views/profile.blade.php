@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <style>
        .profile-info { list-style-type: none; padding-left: 0; }
        .profile-form { margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px; max-width: 400px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .btn-update { padding: 10px 15px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>

    <h1>Profile Page</h1>
    <p>{{$username}}'s Profile Information:</p>

    <ul style="list-style-type: none; padding-left: 0;">
        <li><strong>Username:</strong> {{ $username }}</li>
        <li><strong>Status:</strong> Bookstore Owner</li>
        <li><strong>Joined:</strong> November 22, 2022</li>
    </ul>

    <div class="profile-form">
        <h2>Update Password</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <form action="/profile" method="POST">
            @csrf
            <div class="form-group">
                <label for="old_password">Old Password</label>
                <input type="password" name="old_password" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" required>
            </div>
            <button type="submit" class="btn-update">Update Password</button>
        </form>
    </div>
@endsection