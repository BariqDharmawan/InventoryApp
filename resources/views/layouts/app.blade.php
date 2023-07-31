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
            <a class="mb-5 flex items-center pl-2.5" href="https://flowbite.com/">
                <img alt="Flowbite Logo" class="mr-3 h-6 sm:h-7" src="https://flowbite.com/docs/images/logo.svg" />
                <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white">Flowbite</span>
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        href="{{ route('products.index') }}">
                        <svg aria-hidden="true"
                            class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 22 21" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ml-3">Produk</span>
                    </a>
                </li>
                <li>
                    <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        href="{{ route('products.stock-flow') }}">
                        <svg aria-hidden="true"
                            class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="ml-3 flex-1 whitespace-nowrap">Stock Flow</span>
                    </a>
                </li>
                <li>
                    <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        href="{{ route('contract-supplier.index') }}">
                        <svg aria-hidden="true"
                            class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="ml-3 flex-1 whitespace-nowrap">Supplier</span>
                        <span
                            class="ml-3 inline-flex h-3 w-3 items-center justify-center rounded-full bg-blue-100 p-3 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        href="{{ route('admin.index') }}">
                        <svg aria-hidden="true"
                            class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        href="{{ route('procurement.index') }}">
                        <svg aria-hidden="true"
                            class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="ml-3 flex-1 whitespace-nowrap">Procurement</span>
                    </a>
                </li>
                <li>
                    <a class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        href="#">
                        <svg aria-hidden="true"
                            class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                            fill="none" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" />
                        </svg>
                        <span class="ml-3 flex-1 whitespace-nowrap">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        {{ $slot }}
    </div>

</body>

</html>
