<x-app-layout title-app="Penjualan">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                <tr>
                    @foreach ($ths as $th)
                        <th class="px-6 py-3">
                            {{ $th }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr class="border-b bg-white hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $sale->tanggal }}</td>
                        <td class="px-6 py-4">{{ $sale->product->kode_barang }}</td>
                        <td class="px-6 py-4">{{ $sale->penjualan }} PCS</td>
                        <td class="px-6 py-4">Rp. {{ number_format($sale->harga) }}</td>
                        <td class="px-6 py-4">{{ $sale->customer }}</td>
                        <td class="px-6 py-4">{{ $sale->invoice }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
