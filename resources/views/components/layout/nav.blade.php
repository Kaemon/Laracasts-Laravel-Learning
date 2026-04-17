<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="Logo" width="100">
            </a>
        </div>
        <div class="flex gap-x-5 items-center">
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn">Log Out</button>
                </form>            
            @else
                <a href="/login">Login</a>
                <a href="/register" class="btn">Register</a>
            @endauth
        </div>
    </div>
</nav>