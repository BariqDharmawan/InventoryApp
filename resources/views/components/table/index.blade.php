@props(['thead'])

<table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
    <thead class="align-bottom">
        {{ $thead }}
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
