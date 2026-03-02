<div {{ $attributes->merge([
    'class' => 'text-lg font-medium text-[hsl(var(--muted-foreground))]',
]) }}>
    {{ $slot }}
</div>
