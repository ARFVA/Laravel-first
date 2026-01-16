<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company" class="size-8" />
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
                        <x-nav-link href="/profil" :active="request()->is('profil')">Profile</x-nav-link>
                        <x-nav-link href="/kontak" :active="request()->is('kontak')">Kontak</x-nav-link>
                        <x-nav-link href="/student" :active="request()->is('student')">Students</x-nav-link>
                        <x-nav-link href="/guardian" :active="request()->is('guardian')">Guardian</x-nav-link>
                        <x-nav-link href="/classroom" :active="request()->is('classroom')">Classroom</x-nav-link>
                        <x-nav-link href="/teacher" :active="request()->is('teacher')">Teacher</x-nav-link>
                        <x-nav-link href="/subject" :active="request()->is('subject')">Subject</x-nav-link>
                    </div>
                </div>
            </div>

              <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">

                @guest
                    <a href="{{ route('login') }}"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                        Login
                    </a>
                @endguest

                @auth
                    <el-dropdown class="relative ml-3">
                        <button class="flex items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmrHSm3gyVCvfErFNPfu7-hb19YM72sY60Rg&s"
                                class="size-8 rounded-full">
                        </button>

                        <el-menu anchor="bottom end" popover class="w-48 bg-gray-800 rounded-md">
                            <a href="/home" class="block px-4 py-2 text-sm text-gray-300">Dashboard</a>

                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}"
                                class="block px-4 py-2 text-sm text-gray-300">
                                    Admin Dashboard
                                </a>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-gray-300">
                                    Logout
                                </button>
                            </form>
                        </el-menu>
                    </el-dropdown>
                @endauth

            </div>
        </div>

            <div class="-mr-2 flex md:hidden">
                <button type="button" command="--toggle" commandfor="mobile-menu"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6 in-aria-expanded:hidden">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>