<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('product-item.store') }}" class="relative rounded-lg bg-white shadow dark:bg-gray-700"
            method="POST">
            @csrf

            <x-modal.header title="Tambah Item Product" id-modal="{{ $id }}" />

            @if (isset($product))
                <input type="hidden" name="product_id" value="{{ $product->id }}" readonly>
            @endif

            <article class="grid grid-cols-6 gap-6 p-6">
                <div class="col-span-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="kode-item">
                        Kode Item
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600"
                        id="kode-item" name="kode_barang" minlength="6" placeholder="Kode Item" type="text"
                        value="AI{{ Str::random(5) }}" required>
                </div>

                <div class="col-span-6">

                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                        for="message">Deskripsi</label>
                    <textarea
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="description" name="description" placeholder="Masukan deskripsi produknya...." rows="4" required>{{ isset($item) ? $item->description : '' }}</textarea>
                </div>
            </article>

            <x-modal.footer />
        </form>
    </div>
</div>
