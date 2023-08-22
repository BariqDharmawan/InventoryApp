<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl bg-white rounded-lg p-6">
        <p class="mb-4">{{ $procurementPopup->description }}</p>
        <ul>
            <li class="flex gap-4 items-center mb-4">
                <span class="font-bold">TANGGAL AKTIVITAS</span>
                <span>{{ $procurementPopup->action_at->format('d M Y H:i') }} WIB</span>
            </li>
            <li class="flex gap-4 items-center mb-4">
                <span class="font-bold">SUPPLIER</span>
                <span>{{ $procurementPopup->supplier->name }}</span>
            </li>
            <li class="flex gap-4 items-center mb-4">
                <span class="font-bold">QTY</span>
                <span>{{ $procurementPopup->procurementProducts->count() }}</span>
            </li>
            <li>
                <p class="mb-2">Product</p>
                <ol class="pl-4">
                    @foreach ($procurementPopup->procurementProducts as $procurementProducts)
                        <li>
                            <span>{{ $loop->iteration . ')' }}</span>
                            <span>{{ $procurementProducts->product->kode_barang }}</span>
                        </li>
                    @endforeach
                </ol>
            </li>
        </ul>
    </div>
</div>
