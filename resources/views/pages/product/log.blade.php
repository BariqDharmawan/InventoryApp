<x-app-layout title-app="Stock Flow">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">
        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach ($ths as $th)
                        <th class="px-6 py-3">
                            {{ $th }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    <tr class="border-b bg-white hover:bg-gray-50">
                        <td class="px-6 py-4">
                            {{ $log->product->kode_barang }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->activity_desc }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $log->action_at->format('d M Y H:i') }} WIB
                        </td>
                        <td class="px-6 py-4">
                            <a class="font-medium text-blue-600 hover:underline"
                                href="{{ $log->type_log === 'penjualan' ? route('penjualan.show', $log->id) : route('procurement.show', $log->id) }}">
                                Lihat detail
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
