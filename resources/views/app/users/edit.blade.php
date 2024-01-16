<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit User') }}
            <x-btn-link class="float-right ml-4" href="{{ route('users.index') }}">View Users</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- @dd($user); --}}
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('put')

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name"
                                class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300"
                                type="text" name="name" :value="old('name', $user->name)" required
                                autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email"
                                class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300"
                                type="email" name="email" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        
                        <!-- Role -->
                        <div class="mt-4">
                            <x-input-label for="roles" :value="__('Role')" />
                            <select multiple class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-500" name="roles[]" id="roles-select">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" class="{{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'bg-blue-500 text-white selected' : 'bg-gray-200 text-black' }}">
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('roles')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
