<x-app-layout title-app="Products">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6>Products table</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <x-table.index>
                    <x-slot name="thead">
                        <tr>
                            @php
                                $ths = ['Kode barang', 'Nama barang', 'Qty', 'Unit', 'Peramalan Selanjutnya'];
                            @endphp

                            @foreach ($ths as $th)
                                <th
                                    class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70 text-center">
                                    {{ $th }}
                                </th>
                            @endforeach
                        </tr>
                    </x-slot>

                    @for ($i = 1; $i <= 10; $i++)
                        <tr class="text-center">
                            <td>
                                {{ Str::random(1) }}
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm font-semibold leading-normal">Sapu {{ $i }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="text-xs font-semibold leading-tight">{{ rand(1, 10) }}</span>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b ">
                                Cm
                            </td>

                            <td class="relative">
                                <a class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 bg-blue-500 text-white mr-3"
                                    href="{{ route('products.stock-prediction', $i) }}">
                                    lihat
                                </a>
                                <a aria-expanded="false" class="cursor-pointer" dropdown-trigger="">
                                    <i aria-hidden="true" class="fa fa-ellipsis-v text-slate-400"></i>
                                </a>
                                <ul class="z-100 text-sm shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 transition-all before:absolute before:top-0 before:right-7 right-0 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8'] opacity-0 pointer-events-none transform-dropdown"
                                    dropdown-menu="">
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Delete</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Edit</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Hapus</a>
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
