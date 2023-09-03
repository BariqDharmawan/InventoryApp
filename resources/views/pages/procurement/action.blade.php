<x-app-layout title-app="Action">
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
                        @if ($product->procurement->status !== 'ongoing')
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
                                    {{ $product->procurement->action_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $product->procurement->supplier->name }}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    @if ($product->procurement->status === 'tidak')
                                        Tidak Sesuai
                                    @else
                                        {{ $product->procurement->status }}
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-3 items-center">
                                        @if ($product->procurement->status === 'tidak')
                                            <form action="{{ route('procurement.done', $product->procurement) }}"
                                                method="post" onsubmit="return confirm('Apakah barang sudah sesuai?')">
                                                @csrf
                                                @method('PUT')
                                                <button class="bg-blue-600 text-white p-2 rounded-lg" name="status"
                                                    type="submit" value="sesuai">
                                                    Sesuai
                                                </button>
                                            </form>
                                        @else
                                            Sudah sesuai
                                        @endif
                                        <a class="font-medium text-blue-600 hover:underline"
                                            href="{{ route('procurement.show', $product->procurement->id) }}">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        @foreach ($products as $procurementPopup)
            <div aria-hidden="true"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
                id="qc-by-{{ $procurementPopup->procurement->id }}" tabindex="-1">
                <div class="relative max-h-full w-full max-w-sm">
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700 p-6">
                        Telah di QC oleh {{ $procurementPopup->procurement->user->email }}
                        <span class="uppercase">
                            ({{ $procurementPopup->procurement->user->role }})
                        </span>
                        <small>
                            Tanggal:
                            <time datetime="{{ $procurementPopup->procurement->updated_at }}">
                                {{ $procurementPopup->procurement->updated_at->format('d M Y H:i') }}
                                WIB
                            </time>
                        </small>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</x-app-layout>
