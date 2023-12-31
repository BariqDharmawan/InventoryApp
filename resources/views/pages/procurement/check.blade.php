<x-app-layout title-app="Pengadaan">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">


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
                    @foreach ($products as $product)
                        <tr
                            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $product->product->kode_barang }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product->unit }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product->peramalan->peramalan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->procurement->action_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->procurement->supplier->name }}
                            </td>
                            <td class="px-6 py-4 capitalize">
                                @if ($product->procurement->status === 'tidak')
                                    Tidak Sesuai
                                @elseif($product->procurement->status === 'ongoing')
                                    Sedang di QC
                                @else
                                    {{ $product->procurement->status }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    @if (auth()->user()->role === 'qc' && $product->procurement->status === 'ongoing')
                                        <form action="{{ route('procurement.done', $product->procurement) }}"
                                            method="post" class="block"
                                            onsubmit="return confirm('Apakah barang sudah sesuai?')">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="correct_total"
                                                value="{{ $product->product->peramalan->peramalan }}">
                                            <label for="jumlah-diterima">Masukan jumlah barang diterima</label>
                                            <input type="number" id="jumlah-diterima" name="jumlah_diterima"
                                                class="mb-1 block w-20" min="1">
                                            <button class="rounded-lg bg-blue-600 p-2 text-white" type="submit"
                                                value="sesuai">
                                                Submit
                                            </button>
                                        </form>
                                    @elseif($product->procurement->status === 'tidak')
                                        @if ($product->procurement->cancelInfo)
                                            <button class="font-semibold text-red-500"
                                                data-modal-show="modal-cancelled-procurement-{{ $product->procurement->id }}"
                                                data-modal-target="modal-cancelled-procurement-{{ $product->procurement->id }}"
                                                href="javascript:void(0)">
                                                Lihat Tindakan
                                            </button>
                                        @else
                                            @if (auth()->user()->role === 'qc')
                                                <button class="text-red-500"
                                                    data-modal-show="input-cancel-info-{{ $product->procurement->id }}"
                                                    data-modal-target="input-cancel-info-{{ $product->procurement->id }}"
                                                    href="javascript:void(0)">
                                                    Input Keterangan Tidak Sesuai
                                                </button>
                                            @else
                                                <p class="text-red-500">
                                                    Menunggu QC menginput tindakan
                                                </p>
                                            @endif
                                        @endif
                                    @elseif($product->procurement->status !== 'ongoing')
                                        <a class="text-green-600 hover:underline"
                                            data-modal-show="qc-by-{{ $product->procurement->id }}"
                                            data-modal-target="qc-by-{{ $product->procurement->id }}"
                                            href="javascript:void(0)">
                                            Telah di QC
                                        </a>
                                    @endif
                                    <a class="font-medium text-blue-600 hover:underline"
                                        href="{{ route('procurement.show', $product->procurement->id) }}">
                                        Lihat Detail
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @foreach ($products as $procurementPopup)
            @if ($procurementPopup->procurement->cancelInfo)
                <div aria-hidden="true"
                    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
                    id="modal-cancelled-procurement-{{ $procurementPopup->procurement->id }}" tabindex="-1">
                    <div class="relative max-h-full w-full max-w-sm">
                        <div class="relative rounded-lg bg-white p-6 shadow dark:bg-gray-700">
                            <p class="text-lg font-bold">Tindakan Tidak Sesuai</p>
                            {{ $procurementPopup->procurement->cancelInfo->desc }}
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->role === 'qc')
                <div aria-hidden="true"
                    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
                    id="input-cancel-info-{{ $procurementPopup->procurement->id }}" tabindex="-1">
                    <div class="relative max-h-full w-full max-w-sm">
                        <form
                            action="{{ route('procurement.cancelInfo', ['id' => $procurementPopup->procurement->id]) }}"
                            class="relative rounded-lg bg-white p-6 shadow dark:bg-gray-700" method="POST">
                            @csrf
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                name="desc" placeholder="Tindakan" required type="text">

                            <button class="mt-2 w-full rounded-lg bg-red-600 p-2 text-white" type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            @endif

            <div aria-hidden="true"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
                id="qc-by-{{ $procurementPopup->procurement->id }}" tabindex="-1">
                <div class="relative max-h-full w-full max-w-sm">
                    <div class="relative rounded-lg bg-white p-6 shadow dark:bg-gray-700">
                        Telah di QC oleh {{ $procurementPopup->procurement->user->email }}
                        <span class="uppercase">
                            ({{ $procurementPopup->procurement->user->role }})
                        </span>
                        <time class="mt-3 block" datetime="{{ $procurementPopup->procurement->updated_at }}">
                            {{ $procurementPopup->procurement->updated_at->format('d M Y H:i') }}
                            WIB
                        </time>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</x-app-layout>
