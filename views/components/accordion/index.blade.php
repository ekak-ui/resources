@props([
    'exclusive' => false,
    'transition' => false,
])
<div x-data="_ek_accordion({ transition: @js($transition), exclusive: @js($exclusive) })" {{ $attributes->merge(['class' => 'w-full  divide-y']) }} data-accordion>
    {{ $slot }}
</div>
