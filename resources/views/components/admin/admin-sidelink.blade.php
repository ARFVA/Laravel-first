<li>
  <a href="{{ url('/admin/dashboard') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/dashboard') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 2L2 7h16l-8-5zM2 9v9h5v-6h6v6h5V9H2z"/>
    </svg>
    <span class="ml-3">Dashboard</span>
  </a>
</li>

<li>
  <a href="{{ url('/admin/profil') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/profil') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M10 10a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 1114 0H3z" clip-rule="evenodd"/>
    </svg>
    <span class="ml-3">Profil</span>
  </a>
</li>

<li>
  <a href="{{ url('/admin/kontak') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/kontak') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
      <path d="M3 2a1 1 0 00-1 1v3c0 9.94 8.06 18 18 18h3a1 1 0 001-1v-4a1 1 0 00-.89-1c-1.71-.19-3.38-.57-4.98-1.12a1 1 0 00-1.06.25l-2.18 2.19a15.91 15.91 0 01-7.07-7.07l2.19-2.18a1 1 0 00.25-1.06 16.1 16.1 0 01-1.12-4.98A1 1 0 006 3H3z"/>
    </svg>
    <span class="ml-3">Kontak</span>
  </a>
</li>

<li>
  <a href="{{ url('/admin/students') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/students') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2L1 7l11 5 9-4.09V17h2V7L12 2zm0 7.75L3.04 7 12 3.25 20.96 7 12 9.75zM5 18v-2a7 7 0 0114 0v2H5z"/>
    </svg>
    <span class="ml-3">Students</span>
  </a>
</li>


<li>
  <a href="{{ url('/admin/guardians') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/guardians') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 12c2.7 0 4.5-2.2 4.5-4.5S14.7 3 12 3 7.5 5.2 7.5 7.5 9.3 12 12 12zm0 2c-2.9 0-8 1.5-8 4.5V21h16v-2.5c0-3-5.1-4.5-8-4.5z"/>
    </svg>
    <span class="ml-3">Guardians</span>
  </a>
</li>

<li>
  <a href="{{ url('/admin/classroom') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/classroom') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
      <path d="M3 3h14a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1zm1 2v10h12V5H4z"/>
    </svg>
    <span class="ml-3">Classroom</span>
  </a>
</li>

<li>
  <a href="{{ url('/admin/teacher') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/teacher') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4s-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
    </svg>
    <span class="ml-3">Teacher</span>
  </a>
</li>

<li>
  <a href="{{ url('/admin/subject') }}"
    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('admin/subject') ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
    <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
      <path d="M3 4a2 2 0 012-2h7a2 2 0 012 2v15a2 2 0 01-2 2H5a2 2 0 01-2-2V4zm9 0v15a1 1 0 001 1h6a1 1 0 001-1V4a1 1 0 00-1-1h-6a1 1 0 00-1 1z"/>
    </svg>
    <span class="ml-3">Subjects</span>
  </a>
</li>

<li>
  <a href="{{ url('/home') }}"
    class="flex items-center p-2 text-red-700 rounded-lg hover:bg-red-50 {{ request()->is('home') ? 'bg-red-50' : '' }}">
    <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
      <path d="M3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM15 4h-2v2h2v10H7v2h8a1 1 0 001-1V4a1 1 0 00-1-1z"/>
    </svg>
    <span class="ml-3">Logout</span>
  </a>
</li>
