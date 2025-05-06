<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

   {{-- Navbar --}}
  @include('components.navbar')

  {{-- Konten utama --}}
  <main class="flex-1 overflow-auto">
    @yield('content')
  </main>

  {{-- Footer --}}
  <x-footer></x-footer>

</body>
</html>
