<x-app-layout title-app="Arus Stock">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">

        <div id="myTabContent">
            <div class="hidden rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            @foreach ($ths as $th)
                                <th class="px-6 py-3" scope="col">
                                    {{ $th }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($flowIn as $flow)
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    {{ $flow->product->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $flow->qty }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $flow->date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $flow->procurement->title }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="hidden rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            @foreach ($ths as $th)
                                <th class="px-6 py-3" scope="col">
                                    {{ $th }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($flowOut as $flow)
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    {{ $flow->product->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $flow->qty }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $flow->date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $flow->procurement->title }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</x-app-layout>
