<div aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full"
    id="addNewProduct" tabindex="-1">
    <div class="relative w-full max-w-2xl max-h-full">
        <form action="{{ route('products.store') }}" class="relative bg-white rounded-lg shadow dark:bg-gray-700"
            method="POST">
            @csrf
            @include('pages.product.form', ['title' => 'Tambah Product'])
        </form>
    </div>
</div>
