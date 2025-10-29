<x-admin.admin-layout>
  <x-slot:judul>Data Classrooms</x-slot:judul>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <div class="p-6 bg-white rounded-lg shadow">

    <table border="1" cellpadding="8" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Student List</th>
        </tr>
      </thead>
      <tbody>
        @foreach($classrooms as $classroom)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $classroom['name'] }}</td>
            <td>
              <ul>
                @foreach($classroom->students as $student)
                  <li>{{ $student['name'] }}</li>
                @endforeach
              </ul>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-admin.admin-layout>
