<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('procurement.store') }}" class="relative rounded-lg bg-white shadow dark:bg-gray-700"
            method="POST">
            @csrf
            <x-modal.header title="Tambah Procurement" id-modal="{{ $id }}" />

            <div class="p-6">
                <div class="mb-6">
                    <label for="product_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Pilih Product
                    </label>
                    <select id="product_id" name="product_id"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                        <option selected>Pilih product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-6">
                    <label for="contract-supplier" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Atur kontrak
                    </label>
                    <select id="contract-supplier" name="contract_supplier_id"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        required>
                        @foreach ($suppliers as $supplier)
                            <optgroup label="{{ $supplier->name }}">
                                @foreach ($supplier->contractSupplier as $contract)
                                    <option value="{{ $contract->id }}">
                                        {{ $contract->title }}
                                    </option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Judul Procurement
                    </label>
                    <input type="text" name="title" id="title"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="mb-6">
                        <label for="qty" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            QTY
                        </label>
                        <input type="number" name="qty" id="qty"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Price
                        </label>
                        <input type="number" name="price" id="price"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Status Pengadaan
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
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="name">
                        Tipe Flow
                    </label>

                    <div class="flex gap-6">
                        @foreach ($typeStock as $type)
                            <div class="mb-4 flex items-center">
                                <input id="type-{{ $type }}" type="radio" value="{{ $type }}"
                                    name="type"
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                                <label for="type-{{ $type }}"
                                    class="ml-2 text-sm font-medium capitalize text-gray-900 dark:text-gray-300">
                                    {{ $type }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mb-6 flex">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="date">
                        Waktu Aktivitas
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="date" name="date" required type="datetime-local">
                </div>


                <div class="mb-6">
                    <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                        Deskripsi
                    </label>
                    <textarea id="description" name="description" rows="4"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700"
                        placeholder="Masukan deskripsi procurement disini" required></textarea>
                </div>
            </div>
            <x-modal.footer />
        </form>
    </div>
</div>
