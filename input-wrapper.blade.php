@props(['label' => null, 'description' => null, 'name' => null])
@php
    $isGroup = $label || $description || $name;
@endphp

@if ($isGroup)
    <x-ui.field>
        @if ($label)
            <x-ui.label>{{ $label }}</x-ui.label>
        @endif
        @if ($description)
            <x-ui.description>{{ $description }}</x-ui.description>
        @endif
        {{ $slot }}
    </x-ui.field>
@else
    {{ $slot }}
@endif
