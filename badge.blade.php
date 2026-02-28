@props(['color' => 'gray'])

@php
    $colors = [
        'gray' => 'bg-gray-100 text-gray-800',
        'zinc' => 'bg-zinc-100 text-zinc-800',
        'slate' => 'bg-slate-100 text-slate-800',
        'neutral' => 'bg-neutral-100 text-neutral-800',
        'stone' => 'bg-stone-100 text-stone-800',

        'red' => 'bg-red-100 text-red-700',
        'orange' => 'bg-orange-100 text-orange-700',
        'amber' => 'bg-amber-100 text-amber-700',
        'yellow' => 'bg-yellow-100 text-yellow-800',
        'lime' => 'bg-lime-100 text-lime-700',

        'green' => 'bg-green-100 text-green-700',
        'emerald' => 'bg-emerald-100 text-emerald-700',
        'teal' => 'bg-teal-100 text-teal-700',
        'cyan' => 'bg-cyan-100 text-cyan-700',

        'sky' => 'bg-sky-100 text-sky-700',
        'blue' => 'bg-blue-100 text-blue-700',
        'indigo' => 'bg-indigo-100 text-indigo-700',
        'violet' => 'bg-violet-100 text-violet-700',
        'purple' => 'bg-purple-100 text-purple-700',
        'fuchsia' => 'bg-fuchsia-100 text-fuchsia-700',

        'pink' => 'bg-pink-100 text-pink-700',
        'rose' => 'bg-rose-100 text-rose-700',
    ];

    $isPreset = array_key_exists($color, $colors);

    $classes = $isPreset ? $colors[$color] : '';

    $style = $isPreset ? null : "background-color: {$color}; color: white;";
@endphp

<span
    {{ $attributes->merge([
        'class' => "inline-flex items-center rounded-[var(--radius)] px-2 py-1 text-xs font-medium $classes",
        'style' => $style,
    ]) }}>
    {{ $slot }}
</span>
