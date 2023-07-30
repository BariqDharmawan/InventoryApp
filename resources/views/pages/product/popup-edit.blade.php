<div aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
    id="editProduct{{ $loop->index }}" tabindex="-1">
    <div class="relative max-h-full w-full max-w-2xl">
        <form action="{{ route('product-item.update', $item) }}"
            class="relative rounded-lg bg-white shadow dark:bg-gray-700" method="POST">
            @csrf @method('PUT')

        </form>
    </div>
</div>
