@props(['icon', 'label', 'href', 'active' => false])

<li class="mt-0.5 w-full">
    <a {{ $attributes->class([
        'py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors',
        'shadow-soft-xl rounded-lg bg-white font-semibold text-slate-700' => $active
    ])->merge([
        'href' => $href
    ]) }}>
      <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5 ">
        {{ $icon }}
      </div>
      <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ $label }}</span>
    </a>
  </li>
