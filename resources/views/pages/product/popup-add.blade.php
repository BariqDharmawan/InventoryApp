<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ isset($productPopup) ? route('products.update', $productPopup) : route('products.store') }}"
            class="relative rounded-lg bg-white shadow dark:bg-gray-700" method="POST">
            @csrf

            @isset($productPopup)
                @method('PUT')
            @endisset

            <x-modal.header id-modal="{{ $id }}"
                title="{{ isset($productPopup) ? 'Ubah Product ' . $productPopup->name : 'Tambah Product' }}" />

            <div class="relative max-h-full w-full max-w-2xl">
                <div class="space-y-6 p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="kode_barang">
                                Kode Barang
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 "
                                id="kode_barang" name="kode_barang"
                                oninput="this.value = this.value.replace(/\s/g, '');" placeholder="Masukan kode barang"
                                required type="text"
                                value="{{ isset($productPopup) ? $productPopup->kode_barang : '' }}">
                        </div>

                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="kode_barang">
                                QTY
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 "
                                id="qty" min="1" name="qty" placeholder="Masukan QTY product" required
                                type="number"
                                value="{{ isset($productPopup) ? $productPopup->qty : 'IA' . Str::random(5) }}">
                        </div>

                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="name">
                                Nama Product
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 "
                                id="name" name="name" placeholder="Masukan nama product" required type="text"
                                value="{{ isset($productPopup) ? $productPopup->name : '' }}">
                        </div>

                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="last-name">Unit</label>
                            <select
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 "
                                id="unit" name="unit">
                                <option selected>Pilih unit</option>
                                @foreach ($units as $unit)
                                    <option
                                        @isset($productPopup) @if ($unit === $productPopup->unit) selected @endif @endisset
                                        value="{{ $unit }}">
                                        {{ strtoupper($unit) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6">
                            <label class="mb-2 block text-sm font-medium text-gray-900 " for="name">
                                Harga Satuan
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 "
                                id="name" min="10" name="harga_satuan" placeholder="Masukan harga satuan"
                                required step="10" type="number"
                                value="{{ isset($productPopup) ? $productPopup->harga_satuan : '' }}">
                        </div>
                    </div>
                </div>
            </div>

            <x-modal.footer />
        </form>
    </div>
</div>
