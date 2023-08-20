<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('penjualan.store') }}" class="relative rounded-lg bg-white shadow" method="POST">
            @csrf
            <x-modal.header class="col-span-2" id-modal="{{ $id }}" title="Tambah Penjualan" />

            <div class="grid grid-cols-2 gap-3 p-6">
                <x-select-product :datas="$products" name="product_id" />

                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="action-at">
                        Jumlah Penjualan
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600"
                        id="action-at" min="1" name="penjualan" required type="number">
                    <small class="text-gray-500">Satuan mengikuti produk yang dipilih</small>
                </div>

                <div class="mb-6 col-span-2">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="action-at">
                        Tanggal Penjualan
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600"
                        id="action-at" max="{{ date('Y-m-d') }}" name="tanggal" required type="date">
                    <small class="text-gray-500">Satuan mengikuti produk yang dipilih</small>
                </div>

                <div class="mb-5 col-span-2">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="action-at">
                        Nama Customer
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600"
                        id="action-at" minlength="3" name="customer" required type="text">
                </div>
            </div>
            <x-modal.footer />
        </form>
    </div>
</div>
