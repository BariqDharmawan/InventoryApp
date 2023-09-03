<x-app-layout title-app="Plan">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
    </div>
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
            @foreach ($procurementProducts as $procurementProduct)
                <tr class="border-b bg-white hover:bg-gray-50">
                    <td class="px-6 py-4">
                        {{ $procurementProduct['product']['kode_barang'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct['product']['name'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct['product']['unit'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct['product']['max_capacity'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct->action_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct['product']['qty'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct->procurement->procurementProducts()->count() }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct->product->penjualan()->count() }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $procurementProduct['product']['qty'] }}
                    </td>
                    <td class="px-6 py-4">
                        @if (
                            $procurementProduct->product->penjualan()->count() >
                                $procurementProduct->procurement->procurementProducts()->count())
                            Stok Kurang
                        @else
                            Stok Cukup
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
