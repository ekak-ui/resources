{{-- resources/views/components/ui/accordion/heading.blade.php --}}
@props([
    'className' => '',
    'iconPosition' => 'right', // left or right
    'icon' => null,
])

<h3 {{ $attributes->merge(['class' => 'w-full']) }} data-accordion-heading>
    <button type="button" class="flex items-center text-left gap-2 w-full " x-data="{
        open: false,
        init() {
            $watch('opened', () => {
                this.open = opened.includes($el.closest('[data-accordion-item]').getAttribute(
                    'data-accordion-item'))
            })
    
        }
    }">
        @if ($iconPosition === 'left')
            <span>
                @if ($icon)
                    {{ $icon }}
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4"
                        :class="{
                            'rotate-90': open,
                            'transition-transform ease-in-out duration-500': transition
                        }">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                @endif
            </span>
        @endif

        <span class="font-medium">{{ $slot }}</span>

        @if ($iconPosition === 'right')
            <span class="ml-auto">
                @if ($icon)
                    {{ $icon }}
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4"
                        :class="{
                            'rotate-90': open,
                            'transition-transform ease-in-out duration-500': transition
                        }">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                @endif
            </span>
        @endif
    </button>
</h3>
