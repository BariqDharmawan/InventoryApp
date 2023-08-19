<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
    <td class="px-6 py-4">
        {{-- {{ $procurement-> }} --}}
    </td>
    <td class="px-6 py-4">
        {{-- {{ $procurement->product->name }} --}}
    </td>
    <td class="px-6 py-4">
        {{-- {{ $procurement->date->format('d M Y H:i') }} --}}
    </td>
    <td class="px-6 py-4">
        {{ $procurement->qty }}
    </td>
    <td class="px-6 py-4">
        {{-- {{ $procurement->procurement->title }} --}}
    </td>
    <td class="px-6 py-4">
        <a class="font-medium text-blue-600 hover:underline" data-modal-show="detailProcurement{{ $loop->index }}"
            data-modal-target="detailProcurement{{ $loop->index }}" href="javascript:void(0)">
            Lihat Detail
        </a>
    </td>

</tr>
