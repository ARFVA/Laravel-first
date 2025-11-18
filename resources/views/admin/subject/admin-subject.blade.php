<x-admin.admin-layout>
  <x-slot:judul>{{ $title }}</x-slot:judul>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

    <div x-data="{ openAddModal: false, openDeleteModal: false, deleteUrl: '' }">
      
      {{-- Tombol Add Subject --}}
      <x-admin.admin-menu-table
          button-label="Add Subject"
          on-click="openAddModal = true"
      />

      {{-- Modal Add --}}
      <div x-show="openAddModal" x-transition class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">
          <button @click="openAddModal = false" class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>
          {{-- Form Tambah Subject --}}
          <form action="{{ route('subject.store') }}" method="POST" class="space-y-4">
            @csrf
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Subject</h3>

            <div>
              <label class="block mb-1 text-sm font-medium">Nama Subject</label>
              <input type="text" name="name" required class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
              <label class="block mb-1 text-sm font-medium">Deskripsi</label>
              <textarea name="description" rows="2" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"></textarea>
            </div>

            <div class="flex justify-end space-x-2">
              <button
                type="button"
                @click="openAddModal = false"
                class="px-4 py-2 border rounded-md text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700"
              >Batal</button>
              <button
                type="submit"
                class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800"
              >Simpan</button>
            </div>
          </form>
        </div>
      </div>

      <div x-show="openDeleteModal" x-transition class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-md p-6 relative">
          <button @click="openDeleteModal = false" class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>
          <div class="text-center">
            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
            </svg>
            <p class="mb-4 text-gray-500 dark:text-gray-300">
             Are you sure you want to delete this subject?
            </p>
            <div class="flex justify-center space-x-4">
              <button @click="openDeleteModal = false"
                      class="py-2 px-3 text-sm font-medium text-gray-500 bg-white border rounded-lg hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                No, cancel
              </button>
              <form :action="deleteUrl" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="py-2 px-3 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
                  Yes, delete
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-x-auto max-h-[500px] overflow-y-auto">
        <table class="w-full text-sm text-left border border-gray-300">
          <thead class="bg-gray-100 text-gray-700 sticky top-0">
            <tr>
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">Deskripsi</th>
              <th class="px-4 py-3">Daftar Guru</th>
              <th class="px-4 py-3 text-right">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($subjects as $subject)
            <tr class="hover:bg-gray-50 border-b">
              <td class="px-4 py-3">{{ $loop->iteration }}</td>
              <td class="px-4 py-3">{{ $subject->name }}</td>
              <td class="px-4 py-3">{{ $subject->description ?? '-' }}</td>
              <td class="px-4 py-3">
                <ul class="list-disc ml-4">
                  @forelse($subject->teachers as $teacher)
                    <li>{{ $teacher->name }}</li>
                  @empty
                    <li class="text-gray-400 italic">Belum ada guru</li>
                  @endforelse
                </ul>
              </td>
              <td class="px-4 py-3 text-right">
                <button
                  @click="openDeleteModal = true; deleteUrl = '{{ route('subject.destroy', $subject->id) }}'"
                  class="text-red-600 hover:text-red-800">
                  Delete
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</x-admin.admin-layout>
