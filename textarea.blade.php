@props([
    'type' => 'text',
    'label' => null,
    'name' => null,
    'description' => null,
])

<x-ui.input-wrapper :$label :$name :$description>
    <textarea
        {{ $attributes->merge([
            'class' =>
                'w-full min-h-[120px] rounded-[var(--radius)] border border-[hsl(var(--border))] bg-[hsl(var(--background))] px-3 py-2 text-sm text-[hsl(var(--foreground))] placeholder:text-[hsl(var(--muted-foreground))] focus:outline-none focus:ring-2 focus:ring-[hsl(var(--ring))] focus:border-transparent disabled:opacity-50 disabled:cursor-not-allowed transition',
        ]) }}>{{ $slot }}</textarea>
</x-ui.input-wrapper>
