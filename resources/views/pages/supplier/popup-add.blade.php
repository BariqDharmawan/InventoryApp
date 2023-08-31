<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <div class="rounded-lg bg-white shadow dark:bg-gray-700">
            <x-modal.header id-modal="{{ $id }}"
                title="{{ isset($supplierEdit) ? 'Ubah Supplier ' . $supplierEdit->name : 'Tambah Supplier' }}" />

            <form
                action="{{ isset($supplierEdit) ? route('suppliers.update', $supplierEdit->id) : route('suppliers.store') }}"
                method="POST">
                @csrf
                @isset($supplierEdit)
                    @method('PUT')
                @endisset
                <div class="p-6">
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="name">
                            Nama
                        </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="name" name="name" required type="text"
                            value="{{ isset($supplierEdit) ? $supplierEdit->name : '' }}">
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">
                            Email
                        </label>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="email" name="email" required type="email"
                            value="{{ isset($supplierEdit) ? $supplierEdit->email : '' }}">
                    </div>
                    <div class="mb-6">
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="telephone">
                            Telephone
                        </label>
                        <input
                            class="input-tel block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="telephone" name="telephone" required type="tel"
                            value="{{ isset($supplierEdit) ? $supplierEdit->telephone : '' }}">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="address">
                            Alamat
                        </label>
                        <textarea
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            id="address" name="address" placeholder="Alamat supplier" required rows="4">{{ isset($supplierEdit) ? $supplierEdit->address : '' }}</textarea>
                    </div>
                </div>

                <x-modal.footer />
            </form>
        </div>
    </div>
</div>
