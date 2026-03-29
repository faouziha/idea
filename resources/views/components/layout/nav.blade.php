<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex justify-between items-center">
        <div>
            <a href="/"
                class="text-bold text-2xl font-extrabold border-b-2 border-transparent hover:text-indigo-500 hover:scale-105 hover:border-indigo-500 transition-colors duration-200 pb-1">
                Idea
            </a>
        </div>

        <div class="flex gap-x-5 items-center">
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn">
                        Logout
                    </button>
                </form>
            @endauth

            @guest
                <a href="/login">Sign In</a>
                <a href="/register" class="btn">Register</a>
            @endguest

        </div>
    </div>
</nav>
