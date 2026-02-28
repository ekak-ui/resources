<div {{ $attributes->merge([
    'class' => 'text-[0.8rem] text-[hsl(var(--muted-foreground))] mt-1.5 ',
]) }}>
    {{ $slot }}
</div>
