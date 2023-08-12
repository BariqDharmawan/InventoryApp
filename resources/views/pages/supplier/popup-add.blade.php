<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <div class="rounded-lg bg-white shadow dark:bg-gray-700">
            <x-modal.header title="Tambah Supplier" id-modal="{{ $id }}" />

            <form action="{{ route('suppliers.store') }}" method="POST">
                @csrf
                <div class="p-6">
                    <div class="mb-6">
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Nama
                        </label>
                        <input type="text" id="name"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            name="name" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>
                        <input type="tel" id="email" name="email"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="telephone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Telephone
                        </label>
                        <input type="tel" id="telephone" name="telephone"
                            class="input-tel block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            required>
                    </div>
                    <div>

                        <label for="address" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Alamat
                        </label>
                        <textarea id="address" rows="4" name="address"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Alamat supplier" required></textarea>
                    </div>
                </div>

                <x-modal.footer />
            </form>
        </div>
    </div>
</div>
