@props(['title', 'isCloseAble' => true, 'idModal'])

<div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
        {{ $title }}
    </h3>

    @if ($isCloseAble)
        <button
            class="ml-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="{{ $idModal }}" type="button">
            <svg aria-hidden="true" class="h-3 w-3" fill="none" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <path d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" stroke="currentColor" />
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    @endif
</div>
