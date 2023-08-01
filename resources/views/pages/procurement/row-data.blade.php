<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
    <td class="px-6 py-4">
        {{ $flow->product->name }}
    </td>
    <td class="px-6 py-4">
        {{ $flow->date->format('d M Y H:i') }}
    </td>
    <td class="px-6 py-4">
        {{ $flow->qty }}
    </td>
    <td class="px-6 py-4">
        {{ $flow->procurement->title }}
    </td>
    <td class="px-6 py-4">
        {{ $flow->procurement->user->email }}
    </td>

    <td class="px-6 py-4">
        {{ $flow->procurement->status }}
    </td>
    <td class="px-6 py-4">
        {{ $flow->procurement->contractSupplier->supplier->name }}
    </td>
</tr>
