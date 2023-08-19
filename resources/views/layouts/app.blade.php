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

    <button aria-controls="logo-sidebar"
        class="ml-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden"
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
        <div class="h-full overflow-y-auto bg-gray-50 px-3 py-4 dark:bg-gray-800">
            <a class="mb-5 flex items-center pl-2.5" href="{{ url('/') }}">
                <img alt="Flowbite Logo" class="mr-3 h-6 sm:h-7" src="https://flowbite.com/docs/images/logo.svg" />
                <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white">
                    {{ env('APP_NAME') }}
                </span>
            </a>

            @php
                $menus = [
                    [
                        'icon' => 'product',
                        'label' => 'Products',
                        'href' => 'products.index',
                    ],
                    [
                        'icon' => 'product',
                        'label' => 'Penjualan',
                        'href' => 'penjualan.index',
                    ],
                    [
                        'icon' => 'supplier',
                        'label' => 'Supplier',
                        'href' => 'suppliers.index',
                    ],
                    [
                        'icon' => 'procurement',
                        'label' => 'Pengadaan',
                        'href' => 'procurement.index',
                    ],
                    [
                        'icon' => 'users',
                        'label' => 'Users',
                        'href' => 'admin.index',
                    ],
                ];
            @endphp

            <ul class="space-y-2 font-medium">
                @foreach ($menus as $menu)
                    <li>
                        <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            href="{{ route($menu['href']) }}">
                            <x-dynamic-component :component="'icon.' . $menu['icon']" />
                            <span class="ml-3">{{ $menu['label'] }}</span>
                        </a>
                    </li>
                @endforeach
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li>
                        <button
                            class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            type="submit">
                            <svg aria-hidden="true"
                                class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                fill="none" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    stroke="currentColor" />
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Sign Out</span>
                        </button>
                    </li>
                </form>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        {{ $slot }}
    </div>

</body>

</html>
