@props(['isMultiple' => false, 'name', 'datas'])

<div {{ $attributes->class(['mb-6']) }}>
    <label class="mb-2 block text-sm font-medium text-gray-900 " for="product">
        Product
    </label>
    <select @if ($isMultiple) multiple @endif class="basic-select" id="product"
        name="{{ $name }}" placeholder="Pilih Product" required>
        <option value="">Pilih Product</option>
        @foreach ($datas as $product)
            <option value="{{ $product->kode_barang }}">{{ $product->name }}</option>
        @endforeach
    </select>
</div>
