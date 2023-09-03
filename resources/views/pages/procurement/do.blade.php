<x-app-layout title-app="Pengadaan">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between bg-white p-4">
            <div>
                <button
                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200"
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
                            <a class="block px-4 py-2 hover:bg-gray-100" data-modal-show="addNewProcurement"
                                data-modal-target="addNewProcurement" href="javascript:void(0)">
                                Tambah pengadaan baru
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
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
                    @foreach ($products as $product)
                        <tr
                            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $product->product->kode_barang }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product->unit }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $product->procurement->action_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->procurement->supplier->name }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('pages.procurement.popup-add', [
            'id' => 'addNewProcurement',
            'products' => $products,
            'suppliers' => $suppliers,
        ])

    </div>
</x-app-layout>
