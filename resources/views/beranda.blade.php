<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
</head>
<body>
  <!-- <nav>
    <a href="/">Beranda</a>
    <a href="/profil">Profil</a>
    <a href="/kontak">Kontak</a>
    <a href="/home">home</a>
  </nav> -->
  <x-layout>    
  <x-slot:judul>{{ $title }}</x-slot:judul>
  <div class="container">
    <h1>Selamat Datang di Website Saya</h1>
    <p>Ini adalah halaman beranda sederhana menggunakan Blade Laravel.</p>
  </div>
</x-layout>
</body>
</html>
