<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('procurement.store') }}" class="relative rounded-lg bg-white shadow dark:bg-gray-700"
            method="POST">
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

                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 " for="add-product">
                        Product
                    </label>
                    <select class="basic-select" id="add-product" multiple name="product_id[]"
                        placeholder="Pilih Product" required>
                        <option value="">Pilih Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->kode_barang }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="action-at">
                            Waktu Aktivitas
                        </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600"
                            id="action-at" name="action_at" required type="datetime-local"
                            value="{{ date('Y-m-d H:i') }}">
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 " for="price">
                            Price
                        </label>
                        <div
                            class="flex border border-gray-300 overflow-hidden rounded-lg focus-within:border-blue-500 focus-within:ring-blue-500">
                            <span class="p-2  bg-gray-50 ">Rp.</span>
                            <input class="block w-full  border-0 bg-gray-50 p-2.5 text-sm text-gray-900 focus:ring-0"
                                id="price" min="100" name="price" required step="10" type="number">
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="description">
                        Deskripsi
                    </label>
                    <textarea
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700"
                        id="description" name="description" placeholder="Masukan deskripsi procurement disini" required rows="4"></textarea>
                </div>
            </div>
            <x-modal.footer />
        </form>
    </div>
</div>
