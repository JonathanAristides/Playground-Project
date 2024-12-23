@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <div class="">
        <input {{ $attributes($defaults) }}>
        <span class="">{{ $label }}</span>
    </div>
</x-forms.field>

