<div aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    id="addNewFlow" tabindex="-1">
    <div class="relative w-full max-w-2xl max-h-full">

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah arus produk
                </h3>
                <button
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="editUserModal" type="button">
                    <svg aria-hidden="true" class="w-3 h-3" fill="none" viewBox="0 0 14 14"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <div class="p-6 space-y-6">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="col-span-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="last-name">
                            Pilih produk
                        </label>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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

            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="submit">Save</button>
            </div>

        </div>

    </div>
</div>
