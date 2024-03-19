<header class="w-full fixed top-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-50 bg-[#1b1529] shadow-md">
    <nav class="w-full max-w-7xl mx-auto sm:flex sm:items-center sm:justify-between px-4 py-2 lg:px-0 lg:py-4"
        aria-label="Global">
        <a href="/"><img src="/img/capital.png" alt="capital" /></a>
        <div class="hidden lg:flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:ps-5">
            @if (Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="font-medium px-4 py-2 bg-[#bb8b41] hover:bg-[#966f34] text-white rounded-3xl">
                        Logout
                    </button>
                </form>
            @endif
        </div>
    </nav>
</header>
