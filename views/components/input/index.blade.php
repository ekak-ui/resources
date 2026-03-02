@props([
    'type' => 'text',
    'label' => null,
    'name' => null,
    'description' => null,
])

<x-ui.input-wrapper :$label :$name :$description>
    <input type="{{ $type }}"
        {{ $attributes->merge([
            'class' =>
                'block w-full rounded-[var(--radius)] border border-[hsl(var(--border))] bg-[hsl(var(--background))] px-3 py-2 text-sm text-[hsl(var(--foreground))] placeholder:text-[hsl(var(--muted-foreground))] focus:outline-none focus:ring-2 focus:ring-[hsl(var(--ring))] focus:border-transparent disabled:opacity-50 disabled:cursor-not-allowed transition file:pr-2',
        ]) }} />
</x-ui.input-wrapper>
