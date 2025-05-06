<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-100 flex items-center justify-center min-h-screen">
    <div class="absolute top-20 text-center w-full">
        <h1 class="text-5xl font-extrabold text-green-600">WebStaff</h1>
    </div>
    <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-lg mt-10">
        {{-- Header --}}
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            {{-- Input Username --}}
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring focus:ring-green-200 focus:border-green-400">
            </div>
            {{-- Input Password --}}
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring focus:ring-green-200 focus:border-green-400">
            </div>
            {{-- Tombol submit --}}
            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-md transition">
                Masuk
            </button>
        </form>
    </div>

</body>
</html>
