<x-app-layout title-app="Products">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6>Contract Supplier</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-auto">
                <x-table.index>
                    <x-slot name="thead">
                        <tr>
                            @php
                                $ths = ['Supplier', 'Value', 'Tanggal Mulai', 'Tanggal Selesai', 'Harga', 'Attachment'];
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
                        @php
                            $startDate = date('Y-m-d H:i', strtotime('+' . $i + rand(1, 5) . ' day'));
                            $endData = date('Y-m-d H:i', strtotime('+' . $i + rand(1, 5) . ' day', strtotime($startDate)));
                        @endphp
                        <tr class="text-center">
                            <td>
                                Vendor {{ Str::random(3) }}
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm font-semibold leading-normal">
                                    Rp. {{ number_format(rand(1000000, 10000000)) }}
                                </p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="text-xs font-semibold leading-tight">
                                    {{ $startDate }}
                                </span>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b ">
                                {{ $endData }}
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b ">
                                Rp. {{ number_format(rand(100000000, 200000000)) }}
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b ">
                                <a class="text-blue-500" href="">Lihat Attachment</a>
                            </td>

                            <td class="py-2 px-4 relative">
                                <a aria-expanded="false" class="cursor-pointer" dropdown-trigger="">
                                    <i aria-hidden="true" class="fa fa-ellipsis-v text-slate-400"></i>
                                </a>
                                <ul class="z-100 text-sm shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 transition-all before:absolute before:top-0 before:right-7 right-0 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8'] opacity-0 pointer-events-none transform-dropdown"
                                    dropdown-menu="">
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Detail</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endfor

                </x-table.index>
            </div>
        </div>

    </div>
    <x-primary-button>Tambah</x-primary-button>
</x-app-layout>
