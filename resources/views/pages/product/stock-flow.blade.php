<x-app-layout title-app="Arus Stock">
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
                                data-modal-show="addNewFlow" data-modal-target="addNewFlow" href="#">
                                Tambah Arus Baru
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach ($ths as $th)
                        <th class="px-6 py-3" scope="col">
                            {{ $th }}
                        </th>
                    @endforeach
                    <th class="px-6 py-3" scope="col">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flows as $flow)
                    <tr
                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $flow->products->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flow->type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flow->qty }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flow->date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $flow->procurement->title }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('pages.product.popup-add-flow', ['products' => $products, 'id' => 'addNewFlow'])
</x-app-layout>