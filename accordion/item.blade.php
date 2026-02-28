@props(['id' => 'accorion-item' . uniqid(), 'open' => false])

<div @click="open('{{ $id }}')" data-accordion-item="{{ $id }}" class="w-full py-4"
    x-init="@if ($open) opened.push('{{ $id }}') @endif" {{ $attributes }}>
    {{ $slot }}
</div>
