@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => ''
    ];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>

