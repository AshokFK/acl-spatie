<x-main-layout>
    <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl md:mb-6 border-b pb-2">Edit permission</h2>

    <form action="{{ route('permissions.update', $permission) }}" method="post" class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg p-4">
        @csrf
        @method('put')
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-2">
                <x-input-label for="name" :value="__('Role name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" placeholder="type permission name here" :value="old('name', $permission->name)" required autofocus />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="sm:col-span-2">
                <x-input-label for="name" :value="__('Description')" />
                <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-md shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="describe your permission">{{ old('description', $permission->description) }}</textarea>
            </div>

        </div>
        <x-primary-button>Save</x-primary-button>
    </form>
</x-main-layout>
