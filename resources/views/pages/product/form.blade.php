<!-- Modal header -->
<div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
        {{ $title }}
    </h3>
    <button
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-hide="editUserModal" type="button">
        <svg aria-hidden="true" class="w-3 h-3" fill="none" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
            <path d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" />
        </svg>
        <span class="sr-only">Close modal</span>
    </button>
</div>
<!-- Modal body -->
<div class="p-6 space-y-6">
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="first-name">Nama
                Product</label>
            <input
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="first-name" name="name" placeholder="Masukan nama product" required type="text"
                value="{{ isset($product) ? $product->name : '' }}">
        </div>
        <div class="col-span-3">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="last-name">Unit</label>
            <select
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
        <div class="col-span-6">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="message">Deskripsi</label>
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="description" name="description" placeholder="Masukan deskripsi produknya...." rows="4">{{ isset($product) ? $product->description : '' }}</textarea>
        </div>

        @empty($product)
            <div class="col-span-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="first-name">QTY</label>
                <input
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    id="first-name" name="qty" placeholder="Jumlah produk" required type="number">
            </div>
        @endempty

        @isset($product)
            <div class="col-span-2 flex items-center mb-4">
                <input
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    id="default-checkbox" name="is_change_other_product" type="checkbox" value="true">
                <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="default-checkbox">
                    Ubah produk lain dengan nama yg sama
                </label>
            </div>
        @endisset

    </div>
</div>
<!-- Modal footer -->
<div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
    <button
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="submit">Save all</button>
</div>
