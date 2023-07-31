<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <div class="rounded-lg bg-white shadow dark:bg-gray-700">
            <x-modal.header title="Detail Kontrak Dengan {{ $contract->supplier->name }}"
                id-modal="{{ $id }}" />
            <div class="p-6">
                <p class="mb-3">Tanggal mulai: {{ $contract->start_date->format('d M Y') }}</p>
                <p class="mb-3">Tanggal selesai: {{ $contract->end_date->format('d M Y') }}</p>
                <div>
                    <p>Deskripsi kontrak</p>
                    <div class="break-words text-sm">{!! $contract->description !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
