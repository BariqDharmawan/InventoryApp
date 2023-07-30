<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <div class="rounded-lg bg-white shadow dark:bg-gray-700">
            <x-modal.header title="{{ 'Detail product ' . $item->kode_barang }}" />

            <div class="p-6">
                <div class="mb-3">
                    <p class="text-2xl">Nama product</p>
                    <p class="text-sm">{{ $item->products->name }}</p>
                </div>

                <div class="mb-3">
                    <p class="text-2xl">Kode Barang</p>
                    <p class="text-sm">{{ $item->kode_barang }}</p>
                </div>

                <p class="text-2xl">Deskripsi</p>
                <p class="text-sm">{{ $item->description }}</p>
            </div>
        </div>
    </div>
</div>
