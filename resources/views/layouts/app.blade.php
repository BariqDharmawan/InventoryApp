<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="{{ asset('img/apple-icon.png') }}" rel="apple-touch-icon" sizes="76x76" />
    <link href="{{ asset('img/favicon.png') }} " rel="icon" type="image/png" />
    <title>{{ $titleApp }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @php
        $menus = [];
        if (auth()->user()->role === 'qc') {
            $menus[] = [
                'icon' => 'procurement',
                'label' => 'Pengadaan',
                'href' => 'javascript:void(0);',
                'dropdown' => [
                    [
                        'icon' => 'plan',
                        'label' => 'Check',
                        'href' => route('procurement.check', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') . '-' . date('n'),
                        ]),
                    ],
                ],
            ];
        } elseif (auth()->user()->role === 'direktur') {
            $menus[] = [
                'icon' => 'product',
                'label' => 'Penjualan',
                'href' => route('penjualan.index'),
            ];
            $menus[] = [
                'icon' => 'supplier',
                'label' => 'Supplier',
                'href' => route('suppliers.index'),
            ];
            $menus[] = [
                'icon' => 'product',
                'label' => 'Stock Flow',
                'href' => route('products.log'),
            ];
            $menus[] = [
                'icon' => 'product',
                'label' => 'Products',
                'href' => route('products.index'),
            ];
            $menus[] = [
                'icon' => 'procurement',
                'label' => 'Pengadaan',
                'href' => 'javascript:void(0);',
                'dropdown' => [
                    [
                        'icon' => 'plan',
                        'label' => 'Plan',
                        'href' => route('procurement.plan', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') - 3 . '-' . date('n'),
                        ]),
                    ],
                    [
                        'icon' => 'plan',
                        'label' => 'Do',
                        'href' => route('procurement.do', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') - 3 . '-' . date('n'),
                        ]),
                    ],
                    [
                        'icon' => 'plan',
                        'label' => 'Check',
                        'href' => route('procurement.check', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') . '-' . date('n'),
                        ]),
                    ],
                    [
                        'icon' => 'plan',
                        'label' => 'Action',
                        'href' => route('procurement.action', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') . '-' . date('n'),
                        ]),
                    ],
                ],
            ];
        } elseif (auth()->user()->role === 'purchasing') {
            $menus[] = [
                'icon' => 'users',
                'label' => 'Users',
                'href' => route('admin.index'),
            ];
            $menus[] = [
                'icon' => 'product',
                'label' => 'Penjualan',
                'href' => route('penjualan.index'),
            ];
            $menus[] = [
                'icon' => 'supplier',
                'label' => 'Supplier',
                'href' => route('suppliers.index'),
            ];
            $menus[] = [
                'icon' => 'product',
                'label' => 'Stock Flow',
                'href' => route('products.log'),
            ];
            $menus[] = [
                'icon' => 'product',
                'label' => 'Products',
                'href' => route('products.index'),
            ];
            $menus[] = [
                'icon' => 'procurement',
                'label' => 'Pengadaan',
                'href' => 'javascript:void(0);',
                'dropdown' => [
                    [
                        'icon' => 'plan',
                        'label' => 'Plan',
                        'href' => route('procurement.plan', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') - 3 . '-' . date('n'),
                        ]),
                    ],
                    [
                        'icon' => 'plan',
                        'label' => 'Do',
                        'href' => route('procurement.do', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') - 3 . '-' . date('n'),
                        ]),
                    ],
                    [
                        'icon' => 'plan',
                        'label' => 'Check',
                        'href' => route('procurement.check', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') . '-' . date('n'),
                        ]),
                    ],
                    [
                        'icon' => 'plan',
                        'label' => 'Action',
                        'href' => route('procurement.action', [
                            'triwulanYear' => '2023',
                            'triwulanMonth' => date('n') . '-' . date('n'),
                        ]),
                    ],
                ],
            ];
        }
        // dd($menus);
    @endphp
    <button aria-controls="logo-sidebar"
        class="ml-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 sm:hidden"
        data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" type="button">
        <span class="sr-only">Open sidebar</span>
        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                fill-rule="evenodd"></path>
        </svg>
    </button>

    <aside aria-label="Sidebar"
        class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
        id="logo-sidebar">
        <div class="h-full overflow-y-auto bg-gray-50 px-3 py-4  flex flex-col">
            <a class="mb-5 flex items-center pl-2.5" href="{{ url('/') }}">
                <span class="self-center whitespace-nowrap font-semibold  w-full">
                    {{ env('APP_NAME') }}
                </span>
            </a>

            <ul class="space-y-2 font-medium mb-auto">
                @foreach ($menus as $menu)
                    <li>
                        @if (isset($menu['dropdown']))
                            <button aria-controls="dropdown-example"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 "
                                data-collapse-toggle="dropdown-example" type="button">
                                <x-dynamic-component :component="'icon.' . $menu['icon']" />

                                <span class="flex-1 ml-3 text-left whitespace-nowrap">
                                    {{ $menu['label'] }}
                                </span>
                                <svg aria-hidden="true" class="w-3 h-3" fill="none" viewBox="0 0 10 6"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="m1 1 4 4 4-4" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" />
                                </svg>
                            </button>
                            <ul class="hidden pl-4 py-2 space-y-2" id="dropdown-example">
                                @foreach ($menu['dropdown'] as $dropdown)
                                    <li>
                                        <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 "
                                            href="{{ $dropdown['href'] }}">
                                            <x-dynamic-component :component="'icon.' . $dropdown['icon']" />
                                            <span class="ml-3">{{ $dropdown['label'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100"
                                href="{{ $menu['href'] }}">
                                <x-dynamic-component :component="'icon.' . $menu['icon']" />
                                <span class="ml-3">{{ $menu['label'] }}</span>
                            </a>
                        @endif
                    </li>
                @endforeach
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 "
                            type="submit">
                            <x-icon.logout />
                            <span class="ml-3 flex-1 whitespace-nowrap">Sign Out</span>
                        </button>
                    </form>
                </li>
            </ul>
            <span class="capitalize font-bold">{{ auth()->user()->role }}</span>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        {{ $slot }}
    </div>

</body>

</html>
