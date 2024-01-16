<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tenants') }}
            <x-btn-link class="float-right ml-4" href="{{ route('tenants.create') }}">Add Tenant</x-btn-link>
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
                                <th class="py-3">Domain</th>
                                <th class="py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd($tenants); --}}
                            @foreach ($tenants as $tenent)        
                            <tr>
                                <td class="py-3 text-center">{{$tenent->name}}</td>
                                <td class="py-3 text-center">{{$tenent->email}}</td>
                                <td class="py-3 text-center">
                                    @foreach ($tenent->domains as $domain)
                                    {{ $domain->domain }}{{ $loop->last ? '': ','}}
                                    @endforeach</td>
                                <td class="py-2 text-center">
                                    <x-btn-link class="focus:outline-none text-white bg-red-500 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">Delete</x-btn-link>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
