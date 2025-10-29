<x-admin.admin-layout>
  <x-slot:judul>Data Subjects</x-slot:judul>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <div class="p-6 bg-white rounded-lg shadow">

    @php $subjects = \App\Models\Subject::all(); @endphp

    <table class="min-w-full bg-white border">
      <thead>
        <tr>
          <th>No</th><th>Name</th><th>Description</th><th>Teacher List</th>
        </tr>
      </thead>
      <tbody>
        @foreach($subjects as $subject)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $subject->name }}</td>
            <td>{{ $subject->description }}</td>
            <td>
              <ul>
                @foreach($subject->teachers as $teacher)
                  <li>{{ $teacher->name }}</li>
                @endforeach
              </ul>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-admin.admin-layout>
