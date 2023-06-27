@php
    $paths = explode("/", request()->path());
@endphp

<ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
    @foreach ($paths as $path)
        @if ($loop->last)
            <li class="text-sm capitalize leading-normal text-slate-700 before:float-left @if(count($paths) > 1) pl-2 before:pr-2 before:text-gray-600 before:content-['/'] @endif" aria-current="page">{{ $path }}</li>
        @else
            <li class="leading-normal text-sm">
                <a class="opacity-50 text-slate-700" href="javascript:;">{{ $path }}</a>
            </li>
        @endif
    @endforeach


  </ol>
