<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $judul ?? 'Admin Panel' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-900">

  {{-- Navbar --}}
  @include('components.admin.admin-navbar')

  {{-- Sidebar --}}
  @include('components.admin.admin-sidebar')

  {{-- Main Content --}}
  <main class="p-4 md:ml-64 pt-20">
    <header class="mb-4">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
        {{ $judul ?? '' }}
      </h1>
    </header>

    {{ $slot }}
  </main>

</body>

</html>