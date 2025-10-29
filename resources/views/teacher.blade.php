<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Mata Pelajaran</th>
            <th>Telepon</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach($teachers as $teacher)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $teacher->name }}</td>
              <td>{{ $teacher->email }}</td>
              <td>{{ $teacher->subject->name ?? '-' }}</td>
              <td>{{ $teacher->phone }}</td>
              <td>{{ $teacher->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>