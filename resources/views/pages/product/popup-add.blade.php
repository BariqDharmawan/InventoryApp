<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('products.store') }}" class="relative rounded-lg bg-white shadow dark:bg-gray-700"
            method="POST">
            @csrf
            <x-modal.header title="Tambah Product" id-modal="{{ $id }}" />

            <div class="relative max-h-full w-full max-w-2xl">
                <div class="space-y-6 p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="name">
                                Nama Product
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="name" name="name" placeholder="Masukan nama product" required type="text"
                                value="{{ isset($product) ? $product->name : '' }}">
                        </div>
                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="last-name">Unit</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="unit" name="unit">
                                <option selected>Pilih unit</option>
                                @foreach ($units as $unit)
                                    <option
                                        @isset($product) @if ($unit === $product->unit) selected @endif @endisset
                                        value="{{ $unit }}">
                                        {{ strtoupper($unit) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <x-modal.footer />
        </form>
    </div>
</div>
