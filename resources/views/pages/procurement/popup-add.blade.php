<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1" data-product-id="{{ $productId }}">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('products.store') }}" class="relative rounded-lg bg-white shadow dark:bg-gray-700"
            method="POST">
            @csrf
            <x-modal.header title="Tambah Procurement" id-modal="{{ $id }}" />

            <input type="hidden" name="product_id" value="{{ $productId }}">

            <div class="p-6">
                <div class="mb-6">
                    <label for="countries" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Pilih Supplier
                    </label>
                    <select id="countries"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        required>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Judul Procurement
                    </label>
                    <input type="text" id="title"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="mb-6">
                        <label for="qty" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            QTY
                        </label>
                        <input type="number" id="qty"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Price
                        </label>
                        <input type="number" id="price"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Kegiatan apa ini?
                    </label>
                    <div class="flex gap-6">
                        @foreach ($procurementStatus as $eachStatus)
                            <div class="mb-4 flex items-center">
                                <input id="country-option-1" type="radio" name="status" value="{{ $eachStatus }}"
                                    class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:focus:bg-blue-600 dark:focus:ring-blue-600"
                                    checked>
                                <label for="country-option-1"
                                    class="ml-2 block text-sm font-medium capitalize text-gray-900 dark:text-gray-300">
                                    {{ $eachStatus }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mb-6">
                    <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Deskripsi
                    </label>
                    <textarea id="description" rows="4"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700"
                        placeholder="Masukan deskripsi procurement disini" required></textarea>
                </div>
            </div>
            <x-modal.footer />
        </form>
    </div>
</div>
