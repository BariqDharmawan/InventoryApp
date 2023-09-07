<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="{{ $id }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form
            action="{{ isset($resetPasswordUser) ? route('admin.resetPassword', $resetPasswordUser) : route('admin.store') }}"
            class="relative rounded-lg bg-white shadow dark:bg-gray-700" method="POST">
            @csrf
            @isset($resetPasswordUser)
                @method('PATCH')
            @endisset

            <x-modal.header title="{{ isset($resetPasswordUser) ? 'Reset Password Admin' : 'Create Admin' }}"
                id-modal="{{ $id }}" />

            <div class="relative max-h-full w-full max-w-2xl">
                <div class="space-y-6 p-6">
                    <div class="grid gap-6">
                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">
                                Email
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm disabled:bg-gray-200 disabled:text-gray-700 disabled:select-none text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="email" name="email" {{ isset($resetPasswordUser) ? 'disabled' : '' }}
                                value="{{ isset($resetPasswordUser) ? $resetPasswordUser->email : '' }}"
                                placeholder="Masukan Email" required type="text">
                        </div>
                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="password">
                                Password
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="password" name="password" placeholder="Masukan Password" required type="password">
                        </div>
                        <div class="col-span-3">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="password_confirmation">
                                Confirmation Password
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                id="password_confirmation" name="password_confirmation"
                                placeholder="Masukan Ulang Password" required type="password">
                        </div>
                        @if (!isset($resetPasswordUser))
                            <div class="col-span-3">
                                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                    for="role">
                                    Role
                                </label>
                                <input
                                    class="block w-full rounded-lg border border-gray-300 read-only:bg-gray-200 read-only:text-gray-700 read-only:select-none bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    id="role" name="role" value="admin" readonly type="text">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <x-modal.footer />
        </form>
    </div>
</div>
