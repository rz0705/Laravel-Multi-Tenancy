<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Users') }}
            <x-btn-link class="float-right ml-4" href="{{ route('users.create') }}">Add User</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full mx-auto divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="py-3">Name</th>
                                <th class="py-3">Email</th>
                                <th class="py-3">Role</th>
                                <th class="py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($tenants); --}}
                            @foreach ($users as $user)        
                            <tr>
                                <td class="py-3 text-center">{{$user->name}}</td>
                                <td class="py-3 text-center">{{$user->email}}</td>
                                <td class="py-3 text-center">
                                    @foreach ($user->roles as $role)
                                    {{ $role->name }}{{ $loop->last ? '': ','}}
                                    @endforeach
                                </td>
                                <td class="py-2 text-center">
                                    <x-btn-link href="{{ route('users.edit', $user->id) }}" class="focus:outline-none text-white bg-white-500 hover:bg-white-500 focus:ring-4 focus:ring-white-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-white-500 dark:hover:bg-white-600 dark:focus:ring-white-900">Edit</x-btn-link>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-tenant-app-layout>
