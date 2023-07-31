<x-app-layout title-app="Products">

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
                                data-modal-show="addNewProduct" data-modal-target="addNewProduct" href="#">
                                Tambah product baru
                            </a>
                        </li>
                        <li>
                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-show="addItemProduct" data-modal-target="addItemProduct" href="#">
                                Tambah item product
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
                @foreach ($productItem as $product)
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
                            {{ $product->kode_barang }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->products->name }}
                        </td>
                        <td class="px-6 py-4">
                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                href="">Lihat</a>
                        </td>
                        <td class="px-6 py-4">
                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                data-modal-show="editItemProduct{{ $loop->index }}"
                                data-modal-target="editItemProduct{{ $loop->index }}" href="#"
                                type="button">Edit
                            </a>
                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                data-modal-show="detailProduct{{ $loop->index }}"
                                data-modal-target="detailProduct{{ $loop->index }}" href="#" type="button">
                                Detail
                            </a>
                            <form action="{{ route('product-item.destroy', $product) }}" method="POST"
                                onsubmit="confirm('are you sure?')">
                                @csrf @method('DELETE')
                                <button class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                    type="submit">Hapus</button>
                            </form>
                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                data-modal-show="addNewProcurement{{ $loop->index }}"
                                data-modal-target="addNewProcurement{{ $loop->index }}" href="#" type="button">
                                Buat pengadaan
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @include('pages.product.popup-add', ['id' => 'addNewProduct'])
        @include('pages.product.popup-add-item', ['id' => 'addItemProduct'])

        @foreach ($productItem as $item)
            @include('pages.product.popup-add-item', [
                'id' => 'editItemProduct' . $loop->index,
                'item' => $item,
            ])

            @include('pages.product.popup-detail-item', [
                'id' => 'detailProduct' . $loop->index,
                'item' => $item,
            ])

            @include('pages.procurement.popup-add', [
                'id' => 'addNewProcurement' . $loop->index,
                'productId' => $item->id,
            ])
        @endforeach
    </div>

</x-app-layout>
