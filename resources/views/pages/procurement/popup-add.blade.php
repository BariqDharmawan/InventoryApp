<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('procurement.store') }}" class="relative rounded-lg bg-white shadow dark:bg-gray-700"
            method="POST">
            @csrf
            <x-modal.header id-modal="{{ $id }}" title="Tambah Procurement" />

            <div class="p-6">
                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 " for="supplier">
                        Supplier
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5
                    text-sm"
                        readonly required type="text" value="{{ $supplier->name }}">
                    <input name="supplier_id" type="hidden" value="{{ $supplier->id }}">
                </div>

                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 " for="product_id">
                        Pilih Product
                    </label>
                    <select
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 "
                        id="product_id" multiple name="product_id">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="title">
                        Judul Procurement
                    </label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5
                        text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                        id="title" name="title" type="text">
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 " for="qty">
                            QTY
                        </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="qty" name="qty" required type="number">
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 " for="price">
                            Price
                        </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="price" name="price" required type="number">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="description">
                        Status Pengadaan
                    </label>
                    <div class="flex gap-6">
                        @foreach ($procurementStatus as $eachStatus)
                            <div class="mb-4 flex items-center">
                                <input checked class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300"
                                    id="country-option-1" name="status" type="radio" value="{{ $eachStatus }}">
                                <label
                                    class="ml-2 block text-sm font-medium capitalize text-gray-900 dark:text-gray-300"
                                    for="country-option-1">
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
                                <input
                                    class="h-4 w-4 border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600"
                                    id="type-{{ $type }}" name="type" type="radio"
                                    value="{{ $type }}">
                                <label class="ml-2 text-sm font-medium capitalize text-gray-900 dark:text-gray-300"
                                    for="type-{{ $type }}">
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
