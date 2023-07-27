<x-app-layout title-app="Products">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6>Aktivitas Pengadaan</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <x-table.index>
                    <x-slot name="thead">
                        <tr>
                            @php
                                $ths = ['Nama barang', 'Qty', 'Harga Total', 'Tanggal Aktivitas', 'Approval'];
                            @endphp

                            @foreach ($ths as $th)
                                <th
                                    class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70 text-center">
                                    {{ $th }}
                                </th>
                            @endforeach
                        </tr>
                    </x-slot>

                    @for ($i = 0; $i < 5; $i++)
                        <tr class="text-center">
                            <td>
                                Baju {{ Str::random(5) }}
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm font-semibold leading-normal">{{ rand(1, 10) }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="text-xs font-semibold leading-tight">
                                    Rp.
                                    {{ number_format(rand(10000, 100000)) }}
                                </span>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b ">
                                {{ date('Y-m-d H:i', strtotime("-$i day")) }}
                            </td>

                            <td class="relative">
                                <button
                                    class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 bg-blue-500 text-white mr-3">
                                    Accept
                                </button>
                                <button
                                    class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 bg-red-700 text-white mr-3">
                                    Decline
                                </button>

                            </td>
                        </tr>
                    @endfor

                </x-table.index>
            </div>
        </div>

    </div>
    <x-primary-button>Tambah</x-primary-button>
</x-app-layout>
