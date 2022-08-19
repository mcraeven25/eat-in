@props(['ingredients'])

@php
$ingredients = explode('\n', $ingredients);

@endphp

<ul {{ $attributes->merge(['class' => 'list-disc']) }}>
    @foreach ($ingredients as $ingredient)
        <li class="">
            {{ $ingredient }}
        </li>
    @endforeach
</ul>
