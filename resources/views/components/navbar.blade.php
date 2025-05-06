<nav class="bg-white border-b border-gray-200 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                {{-- nama web --}}
                <a href="/" class="text-xl font-bold text-green-600">WebStaff</a>

                {{-- nav web --}}
                <div class="hidden sm:flex space-x-2 ml-6">
                    <a href="{{ route('home', ['username' => request()->query('username')]) }}"
                        class="{{ request()->is('home') ? 'bg-green-100 text-green-700' : 'text-gray-700' }} px-3 py-2 rounded-md text-sm font-medium hover:bg-green-100 hover:text-green-700 transition">Home
                    </a>
                    <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}"
                        class="{{ request()->is('dashboard') ? 'bg-green-100 text-green-700' : 'text-gray-700' }} px-3 py-2 rounded-md text-sm font-medium hover:bg-green-100 hover:text-green-700 transition">Dashboard
                    </a>
                    <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}"
                        class="{{ request()->is('pengelolaan') ? 'bg-green-100 text-green-700' : 'text-gray-700' }} px-3 py-2 rounded-md text-sm font-medium hover:bg-green-100 hover:text-green-700 transition">Pengelolaan
                    </a>
                    <a href="{{ route('profile', ['username' => request()->query('username')]) }}"
                        class="{{ request()->is('profile') ? 'bg-green-100 text-green-700' : 'text-gray-700' }} px-3 py-2 rounded-md text-sm font-medium hover:bg-green-100 hover:text-green-700 transition">Profil
                    </a>
                    <a href="{{ route('login.form')}}" class="text-gray-700 px-3 py-2 rounded-md text-sm font-medium hover:bg-green-100 hover:text-green-700 transition">Login</a>

                </div>
            </div>

            <!-- Tombol Hamburger -->
            <div class="sm:hidden flex items-center">
                <button type="button" class="p-2 rounded-md text-gray-700 hover:bg-green-100 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
