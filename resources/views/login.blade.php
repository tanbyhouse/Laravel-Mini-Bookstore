<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tan's Mini Bookstore</title>
    <style>
        body { font-family: Arial, sans-serif; display: grid; place-items: center; min-height: 90vh; background: linear-gradient(180deg,#fff0f6,#ffe6f2); }
        .login-card { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 6px 20px rgba(203, 51, 102, 0.08); width: 340px; }
        .login-card h1 { text-align: center; margin-top: 0; color:#b02a57; }
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: 700; color:#6b0f3a; }
        .form-group input { width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #f2cfe0; border-radius: 6px; background: #fff7fb; }
        .btn { width: 100%; padding: 10px; background: linear-gradient(90deg,#ff6aa6,#ff3b8a); color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; font-weight: 700; }
        .btn:hover { opacity: 0.95; transform: translateY(-1px); }
        .alert { padding: 10px; border-radius: 6px; margin-bottom: 12px; color: #7a122f; background: #ffe6f0; border: 1px solid #ffcee1; }
    </style>
</head>

<body>
    <div class="login-card">
        <h1>Login</h1>

        @if(session('error'))
            <p style="color: red; text-align: center; margin-bottom: 15px;">
                {{ session('error') }}
            </p>
        @endif
        
        <form action="/login" method="POST">
            @csrf 

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>