<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">

    <div class="relative max-h-full w-full max-w-2xl">
        <div class="rounded-lg bg-white shadow">
            <x-modal.header title="{{ isset($item) ? 'Detail Contract ' . $item->supplier->name : 'Pasang contract' }}"
                id-modal="{{ $id }}" />

            <form
                action="{{ isset($item) ? route('contract-supplier.update', $item) : route('contract-supplier.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf

                @isset($item)
                    @method('PUT')
                @endisset

                <div class="p-6">
                    @if (!isset($item))
                        <div class="mb-6">
                            <label for="supplier-id" class="mb-2 block text-sm font-medium text-gray-900">
                                Pilih Supplier
                            </label>
                            <select id="supplier-id"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                name="supplier_id">
                                <option>Pilih Supplier</option>
                                @if (isset($addSingleContract) && $addSingleContract)
                                    <option value="{{ $supplierToAddContract->id }}" selected>
                                        {{ $supplierToAddContract->name }}
                                    </option>
                                @else
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}"
                                            @if (isset($item) && $item->id === $item->id) selected @endif>
                                            {{ $supplier->name }}
                                        </option>
                                    @endforeach
                                @endif

                            </select>
                        </div>
                    @endif

                    <div class="mb-6">
                        <label for="title" class="mb-2 block text-sm font-medium text-gray-900">
                            Judul Kontrak
                        </label>
                        <input type="text" name="title" id="title"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Judul Kontrak" required>
                    </div>

                    <div class="mb-6">
                        <label for="end-date" class="mb-2 block text-sm font-medium text-gray-900">
                            Tanggal Mulai
                        </label>
                        <input type="date" id="end-date"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Tanggal Mulai Kontrak" name="start_date"
                            value="{{ isset($item) ? $item->start_date->format('Y-m-d') : '' }}"
                            min="{{ date('Y-m-d') }}" @if (isset($item) && date('y-m-d') >= $item->start_date) readonly @endif required>
                    </div>

                    <div class="mb-6">
                        <label for="end-date" class="mb-2 block text-sm font-medium text-gray-900">
                            Tanggal Selesai
                        </label>
                        <input type="date" id="end-date"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            value="{{ isset($item) ? $item->end_date->format('Y-m-d') : '' }}"
                            placeholder="Tanggal Selesai Kontrak" min="{{ date('Y-m-d') }}" name="end_date" required>
                    </div>

                    <div class="mb-6">
                        <label for="contract-value" class="mb-2 block text-sm font-medium text-gray-900">
                            Contract Value
                        </label>
                        <input type="number" id="contract-value"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            name="contract_value" min="1000" step="10"
                            value="{{ isset($item) ? $item->contract_value : '' }}" required>
                    </div>

                    <div class="mb-6">
                        <label for="description" class="mb-2 block text-sm font-medium text-gray-900">
                            Deskripsi Kontrak
                        </label>
                        <textarea id="description" rows="4"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Jelaskan detail kontrak disini" name="description" required>{{ isset($item) ? $item->description : '' }}</textarea>
                    </div>

                    <div class="mb-6">

                        <label class="mb-2 block text-sm font-medium text-gray-900"
                            for="attachment">{{ isset($item) ? 'Ganti file' : 'Upload file' }}</label>
                        <input
                            class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none"
                            name="attachment" id="attachment" placeholder="Upload" type="file"
                            @if (!isset($item)) required @endif>
                        @isset($item)
                            <a href="{{ Storage::url($item->filename) }}" target="_blank"
                                class="text-blue-600 hover:underline">
                                Lihat attachment
                            </a>
                        @endisset
                    </div>

                </div>

                <x-modal.footer />

            </form>
        </div>
    </div>
</div>
