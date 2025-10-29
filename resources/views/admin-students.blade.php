<x-admin.admin-layout>
  <x-slot:judul>Data Students</x-slot:judul>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <div class="p-6 bg-white rounded-lg shadow">

    <form action="{{ route('admin.students.store') }}" method="POST" class="mb-6">
      @csrf
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
          <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" id="name" name="name" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>
        <div>
          <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>
        <div>
          <label for="classroom_id" class="block mb-1 text-sm font-medium text-gray-700">Kelas</label>
          <select id="classroom_id" name="classroom_id" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
            <option value="">-- Pilih Kelas --</option>
            @foreach (\App\Models\Classroom::all() as $classroom)
              <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label for="adress" class="block mb-1 text-sm font-medium text-gray-700">Alamat</label>
          <input type="text" id="adress" name="adress" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>
        <div>
          <label for="birthday" class="block mb-1 text-sm font-medium text-gray-700">Tanggal Lahir</label>
          <input type="date" id="birthday" name="birthday" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>
        <div>
          <label for="score" class="block mb-1 text-sm font-medium text-gray-700">Nilai</label>
          <input type="number" id="score" name="score" min="0" max="100" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>
      </div>

      <div class="mt-4">
        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5">
          Tambah Siswa
        </button>
      </div>
    </form>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left border border-gray-300">
        <thead class="bg-gray-100 text-gray-700">
          <tr>
            <th>No</th><th>Nama</th><th>Email</th><th>Kelas</th><th>Alamat</th><th>Tanggal Lahir</th><th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          @foreach($students as $student)
            <tr class="hover:bg-gray-50">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->email }}</td>
              <td>{{ $student->classroom->name ?? '-' }}</td>
              <td>{{ $student->adress }}</td>
              <td>{{ $student->birthday }}</td>
              <td>{{ $student->score }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-admin.admin-layout>
