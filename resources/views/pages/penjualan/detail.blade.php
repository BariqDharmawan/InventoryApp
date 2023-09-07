<x-app-layout title-app="Products">
    <div class="container">
        <div class="flex items-center justify-between flex-wrap mb-4">
            <p class="mb-2 font-bold text-2xl capitalize">
                {{ $sale->invoice }}
            </p>
            <time class="font-bold">{{ $sale->tanggal->format('d M Y') }}</time>
        </div>

        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 mb-12">
            <li>
                <b>Nama pembeli:</b>
                <span>{{ $sale->customer }}</span>
            </li>
            <li>
                <b>Invoice:</b>
                <span>{{ $sale->invoice }}</span>
            </li>
            <li>
                <b>QTY penjualan:</b>
                <span>
                    {{ $sale->penjualan }}
                    <span class="uppercase">{{ $sale->product->unit }}</span>
                </span>
            </li>
        </ul>

        <p class="mb-4 text-xl">Product yang dijual</p>

        <div class="grid grid-cols-3">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <div class="mb-5">
                    <h5 class="mb-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white capitalize">
                        {{ $sale->product->name }}
                    </h5>
                    <small>({{ $sale->product->kode_barang }})</small>
                </div>
                <ul>
                    <li>
                        <b>Harga Satuan:</b>
                        <span>
                            Rp. {{ number_format($sale->product->harga_satuan) }}
                        </span>
                    </li>
                    <li>
                        <b>Unit Satuan:</b>
                        <span class="uppercase">
                            {{ $sale->product->unit }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
