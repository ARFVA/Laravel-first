<aside id="drawer-navigation"
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  aria-label="Sidebar">
  <div class="h-full px-3 py-4 overflow-y-auto">
    <ul class="space-y-2 font-medium">
      <x-admin.admin-sidelink href="/admin/dashboard" :active="request()->is('admin/dashboard')">Dashboard</x-admin.admin-sidelink>
      <x-admin.admin-sidelink href="/admin/profil" :active="request()->is('admin/profil')">Profil</x-admin.admin-sidelink>
      <x-admin.admin-sidelink href="/admin/kontak" :active="request()->is('admin/kontak')">Kontak</x-admin.admin-sidelink>
      <x-admin.admin-sidelink href="/admin/students" :active="request()->is('admin/students')">Students</x-admin.admin-sidelink>
      <x-admin.admin-sidelink href="/admin/guardians" :active="request()->is('admin/guardians')">Guardians</x-admin.admin-sidelink>
      <x-admin.admin-sidelink href="/admin/classrooms" :active="request()->is('admin/classroom')">Classroom</x-admin.admin-sidelink>
      <x-admin.admin-sidelink href="/admin/teacher" :active="request()->is('admin/teacher')">Teacher</x-admin.admin-sidelink>
      <x-admin.admin-sidelink href="/admin/subject" :active="request()->is('admin/subject')">Subjects</x-admin.admin-sidelink>
      <li>
        <a href="{{ url('/home') }}"
          class="flex items-center p-2 text-red-700 rounded-lg hover:bg-red-50 {{ request()->is('home') ? 'bg-red-50' : '' }}">
          <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM15 4h-2v2h2v10H7v2h8a1 1 0 001-1V4a1 1 0 00-1-1z" />
          </svg>
          <span class="ml-3">Logout</span>
        </a>
      </li>
    </ul>
  </div>
</aside>