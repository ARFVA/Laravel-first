<aside id="drawer-navigation"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <x-admin.admin-sidelink :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">Dashboard</x-admin.admin-sidelink>
            <x-admin.admin-sidelink :href="route('admin.profil')" :active="request()->routeIs('admin.profil')">Profil</x-admin.admin-sidelink>
            <x-admin.admin-sidelink :href="route('admin.kontak')" :active="request()->routeIs('admin.kontak')">Kontak</x-admin.admin-sidelink>
            <x-admin.admin-sidelink :href="route('admin.students.index')" :active="request()->routeIs('admin.students.*')">Students</x-admin.admin-sidelink>
            <x-admin.admin-sidelink :href="route('admin.guardians.index')" :active="request()->routeIs('admin.guardians.*')">Guardians</x-admin.admin-sidelink>
            <x-admin.admin-sidelink :href="route('admin.classrooms.index')" :active="request()->routeIs('admin.classrooms.*')">Classroom</x-admin.admin-sidelink>
            <x-admin.admin-sidelink :href="route('admin.teachers.index')" :active="request()->routeIs('admin.teachers.*')">Teacher</x-admin.admin-sidelink>
            <x-admin.admin-sidelink :href="route('admin.subjects.index')" :active="request()->routeIs('admin.subjects.*')">Subjects</x-admin.admin-sidelink>
            <x-admin.admin-sidelink href="/home" :active="request()->is('home')">Logout</x-admin.admin-sidelink>
    </div>
</aside>
