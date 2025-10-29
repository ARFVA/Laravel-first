<x-admin.admin-layout>
  <x-slot:judul>Data Guardians</x-slot:judul>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <div class="p-6 bg-white rounded-lg shadow">
    <form action="{{ route('admin.guardians.store') }}" method="POST" class="mb-6">
      @csrf
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div>
          <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Nama Wali</label>
          <input type="text" id="name" name="name" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <div>
          <label for="job" class="block mb-1 text-sm font-medium text-gray-700">Pekerjaan</label>
          <input type="text" id="job" name="job" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <div>
          <label for="phone" class="block mb-1 text-sm font-medium text-gray-700">Nomor Telepon</label>
          <input type="text" id="phone" name="phone" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <div>
          <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>

        <div class="col-span-2">
          <label for="address" class="block mb-1 text-sm font-medium text-gray-700">Alamat</label>
          <input type="text" id="address" name="address" class="border border-gray-300 text-sm rounded-lg w-full p-2.5" required>
        </div>
      </div>

      <div class="mt-4">
        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5">
          Tambah Wali
        </button>
      </div>
    </form>

    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-300 text-left text-sm text-gray-700">
        <thead class="bg-gray-100">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($guardians as $guardian)
            <tr class="hover:bg-gray-50">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $guardian->name }}</td>
              <td>{{ $guardian->job }}</td>
              <td>{{ $guardian->phone }}</td>
              <td>{{ $guardian->email }}</td>
              <td>{{ $guardian->address }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-admin.admin-layout>
