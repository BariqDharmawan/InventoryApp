<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('procurement.store') }}" class="relative rounded-lg bg-white shadow " method="POST">
            @csrf
            <x-modal.header id-modal="{{ $id }}" title="Tambah Pengadaan" />

            <div class="p-6">
                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 " for="supplier-id">
                        Supplier
                    </label>
                    <select class="basic-select" id="supplier-id" name="supplier_id" placeholder="Pilih Supplier"
                        required>
                        <option value="">Pilih Supplier</option>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach
                    </select>
                </div>

                <article class="border border-gray-200 p-3 rounded-lg mb-3">

                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 " for="pilih-produk-pengadaan">
                            Product
                        </label>
                        <select id="pilih-produk-pengadaan" multiple name="product_id[]" placeholder="Pilih Product"
                            required>
                            <option value="">Pilih Product</option>

                            @foreach ($productsToAddProcurement as $productToAdd)
                                <option value="{{ $productToAdd->kode_barang }}">
                                    {{ $productToAdd->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <template id="fill-qty-selected-product">
                        <div class="mb-6">
                            <label class="mb-2 block text-sm font-medium text-gray-900 label-qty-selected-product"
                                for="qty-selected-product-column">
                                QTY
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 input-qty-selected-product"
                                id="qty-selected-product-column" name="qty_selected_product[]" readonly required
                                type="number">
                        </div>
                    </template>
                    <div id="qty-selected-product">

                    </div>

                </article>

                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900" for="action-at">
                        Waktu Aktivitas
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600"
                        id="action-at" name="action_at" readonly required type="datetime-local"
                        value="{{ date('Y-m-d H:i') }}">
                </div>

                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 " for="description">
                        Deskripsi
                    </label>
                    <textarea
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 "
                        id="description" name="description" placeholder="Masukan deskripsi procurement disini" required rows="4"></textarea>
                </div>
            </div>
            <x-modal.footer />
        </form>
    </div>
</div>
