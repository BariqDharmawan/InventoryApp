<x-app-layout title-app="Products">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6>Peramalan Sapu {{ $id }}</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <x-table.index>
                    <x-slot name="thead">
                        <tr>
                            @for ($i = 1; $i < 12; $i++)
                                <th
                                    class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70 text-center">
                                    Bulan {{ $i }}
                                </th>
                            @endfor
                        </tr>
                    </x-slot>

                    <tr class="text-center">
                        @for ($i = 1; $i <= 12; $i++)
                            <td>
                                {{ rand(10, 100) }}
                            </td>
                        @endfor
                    </tr>

                </x-table.index>
            </div>
        </div>
    </div>
</x-app-layout>
