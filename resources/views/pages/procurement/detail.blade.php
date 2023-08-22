<x-app-layout title-app="Products">
    <div class="container">
        <div class="flex items-center justify-between flex-wrap mb-4">
            <p class="mb-2 font-bold text-2xl capitalize">
                {{ $procurement->description }}
            </p>
            <time class="font-bold">{{ $procurement->action_at->format('d M Y H:i') }}</time>
        </div>

        <ul class="space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 mb-12">
            <li>
                <b>Nama Supplier:</b>
                <span>{{ $procurement->supplier->name }}</span>
            </li>
            <li>
                <b>Total Harga Pengadaa:</b>
                <span>Rp. {{ number_format($procurement->price) }}</span>
            </li>
        </ul>

        <p class="mb-4 text-xl">Product pengadaan</p>

        <div class="grid grid-cols-3">
            @foreach ($procurement->procurementProducts as $procurementProducts)
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="mb-5">
                        <h5 class="mb-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white capitalize">
                            {{ $procurementProducts->product->name }}
                        </h5>
                        <small>({{ $procurementProducts->product->kode_barang }})</small>
                    </div>
                    <ul>
                        <li>
                            <b>Harga Satuan:</b>
                            <span>
                                Rp. {{ number_format($procurementProducts->product->harga_satuan) }}
                            </span>
                        </li>
                        <li>
                            <b>Unit Satuan:</b>
                            <span class="uppercase">
                                {{ $procurementProducts->product->unit }}
                            </span>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
