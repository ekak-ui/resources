<p {{ $attributes->merge([
    'class' => 'text-base leading-relaxed text-[hsl(var(--foreground))]',
]) }}>
    {{ $slot }}
</p>
