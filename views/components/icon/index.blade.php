@props(['name'])
<x-dynamic-component :component="$name" {{ $attributes }} />
