@props([
    'level' => 1,
])

@php
    $tag = 'h' . $level;

    $sizes = [
        1 => 'text-4xl font-bold',
        2 => 'text-3xl font-semibold',
        3 => 'text-2xl font-semibold',
        4 => 'text-xl font-semibold',
        5 => 'text-lg font-medium',
        6 => 'text-base font-medium',
    ];

    $classes = $sizes[$level] ?? $sizes[1];
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes . ' text-[hsl(var(--foreground))]']) }}>
    {{ $slot }}</{{ $tag }}>
