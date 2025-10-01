<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak</title>
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
  <h1>Ini adalah Kontak saya</h1>
  <p>Email: riffatarfa0109@gmail.com</p>
  <p>No HP: 0813-2937-4551</p>
  </div>
</x-layout>

</body>
</html>
