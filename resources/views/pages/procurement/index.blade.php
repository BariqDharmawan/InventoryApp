<x-app-layout title-app="Products">
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg">

        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="p-4">
                        <div class="flex items-center">
                            <input
                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
                                id="checkbox-all-search" type="checkbox">
                            <label class="sr-only" for="checkbox-all-search">checkbox</label>
                        </div>
                    </th>
                    @foreach ($ths as $th)
                        <th class="px-6 py-3">
                            {{ $th }}
                        </th>
                    @endforeach
                    <th class="px-6 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($procurements as $procurement)
                    <tr
                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $procurement->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $procurement->category }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $procurement->qty }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $procurement->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $procurement->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $procurement->users->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $procurement->product->name }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
