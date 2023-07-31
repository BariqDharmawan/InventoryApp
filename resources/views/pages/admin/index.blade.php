<x-app-layout title-app="admin">

    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between bg-white p-4 dark:bg-gray-800">
            <button type="button"
                class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                data-modal-show="addNewUser" data-modal-target="addNewUser">Create
                New User</button>
            <label class="sr-only" for="table-search">Search</label>
            <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg aria-hidden="true" class="h-4 w-4 text-gray-500 dark:text-gray-400" fill="none"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" stroke="currentColor" />
                    </svg>
                </div>
                <input
                    class="block w-80 rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="table-search-users" placeholder="Cari User" type="text">
            </div>
        </div>
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="p-4">
                        <div class="flex items-center">
                            <input
                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
                                id="checkbox-all-search" type="checkbox">
                            <label class="sr-only" for="checkbox-all-search">checkbox</label>
                        </div>
                    </th>
                    @foreach ($ths as $th)
                        <th class="px-6 py-3">
                            {{ $th }}
                        </th>
                    @endforeach
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr
                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
                                    id="checkbox-table-search-1" type="checkbox">
                                <label class="sr-only" for="checkbox-table-search-1">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->role }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($user->is_active)
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</span>
                            @else
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Not
                                    Active</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-3">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white cursor-pointer" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                </svg>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('pages.admin.popup-add', ['id' => 'addNewUser'])
    </div>
</x-app-layout>
