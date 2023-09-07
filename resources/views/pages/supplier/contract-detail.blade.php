<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">

    <div class="relative max-h-full w-full max-w-2xl">
        <div class="rounded-lg bg-white shadow dark:bg-gray-700">
            <x-modal.header title="Lihat Semua Kontrak {{ $supplier->name }}" id-modal="{{ $id }}" />

            <dl class="max-w-md divide-y divide-gray-200 text-gray-900 dark:divide-gray-700 dark:text-white">
                @forelse ($contracts as $contract)
                    <div class="flex flex-col pb-3">
                        <dt class="mb-1 text-gray-500 dark:text-gray-400 md:text-lg">
                            Tanggal Perjanjian
                        </dt>
                        <dd class="text-lg font-semibold">
                            {{ $contract->start_date->format('d M Y') }} -
                            {{ $contract->end_date->format('d M Y') }}
                        </dd>
                    </div>
                @empty
                    <div class="rounded-lg bg-gray-50 p-4 text-sm text-gray-800 dark:bg-gray-800 dark:text-gray-300"
                        role="alert">
                        Belum ada kontrak dengan <strong>{{ $supplier->name }}</strong>
                    </div>
                @endforelse
            </dl>
        </div>
    </div>
</div>
