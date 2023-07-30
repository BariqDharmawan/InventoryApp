<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ isset($item) ? route('product-item.update', $item) : route('product-item.store') }}"
            class="relative rounded-lg bg-white shadow dark:bg-gray-700" method="POST">
            @csrf

            @isset($item)
                @method('PUT')
            @endisset

            <x-modal.header title="{{ isset($item) ? 'Ubah product ' . $item->kode_barang : 'Tambah Item Product' }}" />

            <article class="@if (!isset($item)) grid-cols-6 @endif grid gap-6 p-6">
                @if (!isset($item))
                    <div class="col-span-6">
                        <label for="product-id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Pilih product
                        </label>
                        <select id="product-id"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            name="product_id">
                            <option>Pilih product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" @if (isset($item) && $product->id === $item->id) selected @endif>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif

                @if (!isset($item))
                    <div class="col-span-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                            for="first-name">QTY</label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="first-name" name="qty" min="0" max="1000" placeholder="Jumlah produk"
                            type="number" required>
                    </div>
                @endif


                <div class="col-span-6">

                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                        for="message">Deskripsi</label>
                    <textarea
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="description" name="description" placeholder="Masukan deskripsi produknya...." rows="4">{{ isset($item) ? $item->description : '' }}</textarea>
                </div>
            </article>

            <x-modal.footer />
        </form>
    </div>
</div>
