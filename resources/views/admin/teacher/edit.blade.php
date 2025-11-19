<div x-cloak>
    <div x-show="openEditModal" x-transition class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-2xl p-6 relative">
            <button @click="openEditModal = false" class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">✕</button>

            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Edit Teacher</h3>

            <form :action="editUrl" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" x-model="editData.name" required>
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" x-model="editData.email" required>
                    </div>

                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                        <select name="subject_id" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" x-model="editData.subject_id">
                            <option value="">-- Select Subject --</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" name="phone" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" x-model="editData.phone">
                    </div>

                    <div class="sm:col-span-2">
                        <label class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <textarea name="address" rows="2" class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white" x-model="editData.address"></textarea>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>