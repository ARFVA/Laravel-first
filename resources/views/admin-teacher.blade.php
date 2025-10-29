<x-admin.admin-layout>
  <x-slot:judul>Data Teachers</x-slot:judul>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <div class="p-6 bg-white rounded-lg shadow">

    <form action="{{ route('admin.teachers.store') }}" method="POST" class="mb-6">
      @csrf
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

        <div>
          <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Nama Guru</label>
          <input type="text" id="name" name="name" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <div>
          <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <div>
          <label for="subject_id" class="block mb-1 text-sm font-medium text-gray-700">Mata Pelajaran</label>
          <select id="subject_id" name="subject_id" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
            <option value="">-- Pilih Mata Pelajaran --</option>
            @foreach (\App\Models\Subject::all() as $subject)
              <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
          </select>
        </div>

        <div>
          <label for="phone" class="block mb-1 text-sm font-medium text-gray-700">Nomor Telepon</label>
          <input type="text" id="phone" name="phone" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <div class="md:col-span-2">
          <label for="address" class="block mb-1 text-sm font-medium text-gray-700">Alamat</label>
          <input type="text" id="address" name="address" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>
      </div>

      <div class="mt-4">
        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5">
          Tambah Guru
        </button>
      </div>
    </form>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left border border-gray-300">
        <thead class="bg-gray-100 text-gray-700">
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
            <tr class="hover:bg-gray-50">
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
    </div>
  </div>
</x-admin.admin-layout>
