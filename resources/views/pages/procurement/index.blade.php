<x-app-layout title-app="Pengadaan">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between bg-white p-4 dark:bg-gray-800">
            <div>
                <button
                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                    data-dropdown-toggle="dropdownAction" id="dropdownActionButton" type="button">
                    <span class="sr-only">Action button</span>
                    Action
                    <svg aria-hidden="true" class="ml-2.5 h-2.5 w-2.5" fill="none" viewBox="0 0 10 6"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="m1 1 4 4 4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            stroke="currentColor" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                    id="dropdownAction">
                    <ul aria-labelledby="dropdownActionButton" class="py-1 text-sm text-gray-700 dark:text-gray-200">
                        <li>
                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-show="addNewProcurement" data-modal-target="addNewProcurement"
                                href="javascript:void(0)">
                                Tambah pengadaan baru
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                    <tr>
                        @foreach ($ths as $th)
                            <th class="px-6 py-3">
                                {{ $th }}
                            </th>
                        @endforeach
                        <th class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($procurements as $procurement)
                        <tr
                            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $procurement->action_at }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $procurement->supplier->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $procurement->procurementProducts->count() }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                @if ($procurement->status === 'tidak')
                                    Tidak Sesuai
                                @else
                                    {{ $procurement->status }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3 items-center">
                                    @if ($procurement->status === 'ongoing')
                                        <form action="{{ route('procurement.done', $procurement) }}" method="post">
                                            @csrf
                                            @method('PUT')

                                            <button class="bg-blue-600 text-white p-2 rounded-lg" name="status"
                                                type="submit" value="sesuai">
                                                Sesuai
                                            </button>
                                        </form>
                                        <form action="{{ route('procurement.done', $procurement) }}" method="post">
                                            @csrf
                                            @method('PUT')

                                            <button class="bg-red-600 text-white p-2 rounded-lg" name="status"
                                                type="submit" value="tidak">
                                                Tidak Sesuai
                                            </button>
                                        </form>
                                    @else
                                        <a class="text-green-600 hover:underline"
                                            data-modal-show="qc-by-{{ $procurement->id }}"
                                            data-modal-target="qc-by-{{ $procurement->id }}" href="javascript:void(0)">
                                            Telah di QC
                                        </a>
                                    @endif
                                    <a class="font-medium text-blue-600 hover:underline"
                                        href="{{ route('procurement.show', $procurement->id) }}">
                                        Lihat Detail
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @foreach ($procurements as $procurementPopup)
            <div aria-hidden="true"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
                id="qc-by-{{ $procurementPopup->id }}" tabindex="-1">
                <div class="relative max-h-full w-full max-w-sm">
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700 p-6">
                        <p>Di QC oleh {{ $procurementPopup->user->email }}</p>
                        <small>
                            Tanggal:
                            <time datetime="{{ $procurementPopup->updated_at }}">
                                {{ $procurementPopup->updated_at->format('d M Y H:i') }}
                                WIB
                            </time>
                        </small>
                    </div>
                </div>
            </div>
        @endforeach

        @include('pages.procurement.popup-add', [
            'id' => 'addNewProcurement',
            'products' => $products,
            'suppliers' => $suppliers,
        ])

    </div>
</x-app-layout>
