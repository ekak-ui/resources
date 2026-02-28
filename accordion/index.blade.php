@props([
    'exclusive' => false,
    'transition' => false,
])
<div x-data="{
    transition: @js($transition),
    exclusive: @js($exclusive),
    opened: [],
    open(id) {
        if (this.exclusive) {
            return this.opened = this.opened.includes(id) ? [] : [id];
        }
        if (this.opened.includes(id)) {
            return this.opened = this.opened.filter((i) => i !== id)
        }
        this.opened.push(id);

    }
}" {{ $attributes->merge(['class' => 'w-full  divide-y']) }} data-accordion>
    {{ $slot }}
</div>
