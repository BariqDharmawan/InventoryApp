<x-app-layout title-app="Pengadaan">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between bg-white p-4 dark:bg-gray-800">
            <div>
                <button
                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                    data-dropdown-toggle="dropdownAction" id="dropdownActionButton" type="button">
                    <span class="sr-only">Action button</span>
                    Action
                    <svg aria-hidden="true" class="ml-2.5 h-2.5 w-2.5" fill="none" viewBox="0 0 10 6"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="m1 1 4 4 4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            stroke="currentColor" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                    id="dropdownAction">
                    <ul aria-labelledby="dropdownActionButton" class="py-1 text-sm text-gray-700 dark:text-gray-200">
                        <li>
                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-show="addNewProcurement" data-modal-target="addNewProcurement"
                                href="#">
                                Tambah pengadaan baru
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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
                    id="table-search-users" placeholder="Cari produk" type="text">
            </div>
        </div>


        <div class="border-b border-gray-200 dark:border-gray-700">
            <ul class="-mb-px flex flex-wrap text-center text-sm font-medium" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block rounded-t-lg border-b-2 p-4" id="profile-tab"
                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Masuk</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Keluar</button>
                </li>
            </ul>
        </div>

        <div id="myTabContent">
            <div class="hidden rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                @if (count($flowIn) > 0)
                    <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                @foreach ($ths as $th)
                                    <th class="px-6 py-3">
                                        {{ $th }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($flowIn as $flow)
                                @include('pages.procurement.row-data', ['flow' => $flow])
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="flex items-center rounded-lg bg-gray-50 p-4 text-sm text-gray-800 dark:bg-gray-800 dark:text-gray-300"
                        role="alert">
                        <svg class="mr-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            Tidak ada data masuk
                        </div>
                    </div>
                @endif

            </div>
            <div class="hidden rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                @if (count($flowOut) > 0)
                    <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                @foreach ($ths as $th)
                                    <th class="px-6 py-3">
                                        {{ $th }}
                                    </th>
                                @endforeach
                                <th class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($flowOut as $flow)
                                @include('pages.procurement.row-data', ['flow' => $flow])
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="flex items-center rounded-lg bg-gray-50 p-4 text-sm text-gray-800 dark:bg-gray-800 dark:text-gray-300"
                        role="alert">
                        <svg class="mr-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            Tidak ada data keluar
                        </div>
                    </div>
                @endif

            </div>
        </div>

        @include('pages.procurement.popup-add', [
            'id' => 'addNewProcurement',
            'products' => $products,
            'suppliers' => $suppliers,
            'procurementStatus' => $procurementStatus,
        ])

    </div>
</x-app-layout>
