<nav style="background: linear-gradient(90deg,#ff77a9,#ff4da6); color: white; padding: 12px; box-shadow: 0 2px 6px rgba(0,0,0,0.08);">
    <div style="width: 80%; margin: auto; display: flex; justify-content: space-between; align-items: center;">
        <a href="/dashboard" style="color: white; text-decoration: none; font-weight: 700; font-size: 1.05rem;">
            Tan's Mini Bookstore
        </a>
        <div style="display: flex; gap: 18px; align-items: center;">
            <a href="/dashboard" style="color: #fff; text-decoration: none; font-weight: 600;">Dashboard</a>
            <a href="/pengelolaan" style="color: #fff; text-decoration: none; font-weight: 600;">Management</a>
            <a href="/profile" style="color: #fff; text-decoration: none; font-weight: 600;">Profile</a>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" style="background: transparent; border: 1px solid rgba(255,255,255,0.25); color: #fff; padding: 6px 10px; border-radius: 6px; cursor: pointer; font-weight: 600;">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>