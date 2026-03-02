<div data-accordion-content
    {{ $attributes->merge(['class' => 'grid  w-full mt-2 text-[hsl(var(--muted-foreground))]']) }}
    :class="{
        'transition-all duration-500 ease-in-out': transition,
        'grid-rows-[1fr] opacity-100': opened.includes(
            $el.closest('[data-accordion-item]')
            .getAttribute('data-accordion-item')
        ),
        'grid-rows-[0fr] opacity-0': !opened.includes(
            $el.closest('[data-accordion-item]')
            .getAttribute('data-accordion-item')
        )
    }">
    <div class="overflow-hidden">
        {{ $slot }}
    </div>
</div>
