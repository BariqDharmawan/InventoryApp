<x-app-layout title-app="Contract Supplier">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contractSupplier as $contract)
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
                                {{ $contract->supplier->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contract->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contract->start_date->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $contract->end_date->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ 'Rp.' . number_format($contract->contract_value) }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="text-blue-600 hover:underline dark:text-blue-500"
                                    href="{{ Storage::url($contract->filename) }}" target="_blank">
                                    Lihat attachment
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                @if ($contract->start_date->format('Y-m-d') > date('Y-m-d'))
                                    <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                        data-modal-show="editContract{{ $loop->index }}"
                                        data-modal-target="editContract{{ $loop->index }}" href="javascript:void(0)"
                                        type="button">
                                        Ubah persetujuan
                                    </a>
                                @endif
                                <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                    data-modal-show="detailContract{{ $loop->index }}"
                                    data-modal-target="detailContract{{ $loop->index }}" href="javascript:void(0)"
                                    type="button">
                                    Detail Persetujuan
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('pages.supplier.popup-contract', [
        'id' => 'addContract',
    ])

    @foreach ($contractSupplier as $contract)
        @include('pages.supplier.popup-detail', [
            'id' => 'detailContract' . $loop->index,
            'contract' => $contract,
        ])

        @include('pages.supplier.popup-contract', [
            'id' => 'editContract' . $loop->index,
            'item' => $contract,
        ])
    @endforeach
</x-app-layout>
