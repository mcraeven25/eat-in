@props(['tags'])

@php
$tags = explode(',', $tags);
$tagsupper = array_map('strtoupper', $tags);
@endphp

<ul {{ $attributes->merge(['class' => 'flex flex-wrap w-100']) }}>
    @foreach ($tagsupper as $tag)
        <li class=" text-lg m  ">
            <a href="/?tag={{ $tag }}"
                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
