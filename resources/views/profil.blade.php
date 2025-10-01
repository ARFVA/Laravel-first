<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil</title>
  <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
</head>
<body>
  <!-- <nav class="navbar">
    <a href="/">Beranda</a>
    <a href="/profil">Profil</a>
    <a href="/kontak">Kontak</a>
    <a href="/home">home</a>
    </nav> -->
    <x-layout>
      <x-slot:judul>{{ $title }}</x-slot:judul>
  <div class="container">
    <h1>Profil Diri</h1>

    <ul class="profil-list">
      <li><strong>Nama:</strong> {{ $nama }}</li>
      <li><strong>Kelas:</strong> {{ $kelas }}</li>
      <li><strong>Sekolah:</strong> {{ $sekolah }}</li>
    </ul>
  </div>
</x-layout>

</body>
</html>


