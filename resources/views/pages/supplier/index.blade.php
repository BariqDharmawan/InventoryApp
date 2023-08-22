<x-app-layout title-app="Supplier">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between bg-white p-4 dark:bg-gray-800">
            <div>
                <button
                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 "
                    data-dropdown-toggle="dropdownAction" id="dropdownActionButton" type="button">
                    <span class="sr-only">Action button</span>
                    Action
                    <svg aria-hidden="true" class="ml-2.5 h-2.5 w-2.5" fill="none" viewBox="0 0 10 6"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="m1 1 4 4 4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            stroke="currentColor" />
                    </svg>
                </button>

                <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                    id="dropdownAction">
                    <ul aria-labelledby="dropdownActionButton" class="py-1 text-sm text-gray-700">
                        @php
                            $menus = [
                                [
                                    'label' => 'Tambah supplier',
                                    'popup' => 'addNewSupplier',
                                ],
                            ];
                        @endphp

                        @foreach ($menus as $menu)
                            <li>
                                <a class="block px-4 py-2 hover:bg-gray-100" data-modal-show="{{ $menu['popup'] }}"
                                    data-modal-target="{{ $menu['popup'] }}" href="javascript:void(0)">
                                    {{ $menu['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                    <tr>
                        <th class="p-4">
                            <div class="flex items-center">
                                <input
                                    class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
                                    id="checkbox-all-search" type="checkbox">
                                <label class="sr-only" for="checkbox-all-search">checkbox</label>
                            </div>
                        </th>
                        @foreach ($ths as $th)
                            <th class="px-6 py-3">
                                {{ $th }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listSupplier as $supplier)
                        <tr
                            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
                                        id="checkbox-table-search-1" type="checkbox">
                                    <label class="sr-only" for="checkbox-table-search-1">
                                        checkbox
                                    </label>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $supplier->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $supplier->telephone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $supplier->email }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('pages.supplier.popup-add', [
        'id' => 'addNewSupplier',
    ])

    @foreach ($listSupplier as $supplier)
        @include('pages.supplier.contract-detail', [
            'id' => 'lihatKontrak' . $loop->index,
            'contracts' => $supplier->contractSupplier,
        ])

        @include('pages.supplier.popup-contract', [
            'id' => 'addContract' . $loop->index,
            'addSingleContract' => true,
            'supplierToAddContract' => $supplier,
        ])
    @endforeach
</x-app-layout>
