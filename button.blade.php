{{-- resources/views/components/ui/button.blade.php --}}
@props([
    'type' => 'button',
    'variant' => 'default', // default, primary, secondary, outline, ghost, destructive, success, warning
    'size' => 'default', // default, sm, lg, icon
    'href' => null,
    'disabled' => false,
    'loading' => false,
    'icon' => null,
    'iconPosition' => 'left', // left, right
])

@php
    $baseClasses =
        'inline-flex items-center justify-center font-medium transition-all duration-200 ease-in-out focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 active:scale-[0.98]';

    $variants = [
        'default' =>
            'bg-gray-900 text-white hover:bg-gray-800 focus-visible:ring-gray-900 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-200',
        'primary' =>
            'bg-indigo-600 text-white hover:bg-indigo-500 focus-visible:ring-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400',
        'secondary' =>
            'bg-gray-100 text-gray-900 hover:bg-gray-200 focus-visible:ring-gray-500 dark:bg-gray-800 dark:text-gray-50 dark:hover:bg-gray-700',
        'outline' =>
            'border border-gray-300 bg-transparent text-gray-900 hover:bg-gray-100 focus-visible:ring-gray-500 dark:border-gray-600 dark:text-gray-100 dark:hover:bg-gray-800',
        'ghost' =>
            'bg-transparent text-gray-900 hover:bg-gray-100 focus-visible:ring-gray-500 dark:text-gray-100 dark:hover:bg-gray-800',
        'destructive' =>
            'bg-red-600 text-white hover:bg-red-500 focus-visible:ring-red-600 dark:bg-red-600 dark:hover:bg-red-700',
        'success' =>
            'bg-green-600 text-white hover:bg-green-500 focus-visible:ring-green-600 dark:bg-green-600 dark:hover:bg-green-700',
        'warning' =>
            'bg-yellow-500 text-white hover:bg-yellow-400 focus-visible:ring-yellow-500 dark:bg-yellow-600 dark:hover:bg-yellow-500',
    ];

    $sizes = [
        'sm' => 'h-8 px-3 text-xs gap-1.5 rounded-md',
        'default' => 'h-10 px-4 py-2 text-sm gap-2 rounded-lg',
        'lg' => 'h-12 px-6 text-base gap-2.5 rounded-xl',
        'icon' => 'h-10 w-10 rounded-lg',
    ];

    $iconSizes = [
        'sm' => 'w-3.5 h-3.5',
        'default' => 'w-4 h-4',
        'lg' => 'w-5 h-5',
        'icon' => 'w-4 h-4',
    ];

    $classes = $baseClasses . ' ' . $variants[$variant] . ' ' . $sizes[$size];
    $iconClasses = $iconSizes[$size];
    $spinnerClasses = 'animate-spin ' . $iconClasses;
    $isLink = $href && !$disabled;

    $tag = $isLink ? 'a' : 'button';
@endphp

<{{ $tag }}
    @if ($isLink) href="{{ $href }}" @else type="{{ $type }}" @endif
    @if ($disabled && !$isLink) disabled @endif {{ $attributes->merge(['class' => $classes]) }}>
    @if ($loading)
        <svg class="{{ $spinnerClasses }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
        </svg>
        <span>{{ $slot }}</span>
    @elseif($icon && $iconPosition === 'left' && $size !== 'icon')
        <x-ui.icon :name="$icon" class="{{ $iconClasses }}" />
        <span>{{ $slot }}</span>
    @elseif($icon && $iconPosition === 'right' && $size !== 'icon')
        <span>{{ $slot }}</span>
        <x-ui.icon :name="$icon" class="{{ $iconClasses }}" />
    @elseif($icon)
        <x-ui.icon :name="$icon" class="{{ $iconClasses }}" />
    @else
        {{ $slot }}
    @endif
    </{{ $tag }}>
