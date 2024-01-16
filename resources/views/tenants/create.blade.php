<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Add Tenent') }}
            <x-btn-link class="float-right ml-4" href="{{ route('tenants.index') }}">View Tenant</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('tenants.store') }}">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Domain Name -->
                        <div class="mt-4">
                            <x-input-label for="domain_name" :value="__('Domain Name')" />
                            <x-text-input id="domain_name" class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" type="text" name="domain_name" :value="old('domain_name')" required autofocus autocomplete="domain_name" />
                            <x-input-error :messages="$errors->get('domain_name')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" type="password" name="password" required autocomplete="password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="block w-full px-4 py-2 mt-2 mb-2 rounded-md shadow-sm mb-border focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
