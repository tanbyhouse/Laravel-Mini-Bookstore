<nav style="background-color: #333; color: white; padding: 10px;">
    <div style="width: 80%; margin: auto; display: flex; justify-content: space-between;">
        <a href="/dashboard" style="color: white; text-decoration: none; font-weight: bold;">
            Tan's Mini Bookstore
        </a>
        <div style="display: flex; gap: 20px;">
            <a href="/dashboard" style="color: white; text-decoration: none;">Dashboard</a>
            <a href="/pengelolaan" style="color: white; text-decoration: none;">Management</a>
            <a href="/profile" style="color: white; text-decoration: none;">Profile</a>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" style="background: none; border: none; color: red; cursor: pointer; padding: 0;">Logout</button>
            </form>
        </div>
    </div>
</nav>