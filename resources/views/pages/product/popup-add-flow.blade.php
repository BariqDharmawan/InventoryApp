<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">

        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">

            <x-modal.header title="Tambah arus produk" id-modal="{{ $id }}" />

            <div class="space-y-6 p-6">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="col-span-3">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="last-name">
                            Pilih produk
                        </label>
                        <select
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="unit" name="unit">
                            <option selected>Pilih produk</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">
                                    {{ strtoupper($product->name) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>

            <div class="flex items-center space-x-2 rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                <button
                    class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="submit">Save</button>
            </div>

        </div>

    </div>
</div>
