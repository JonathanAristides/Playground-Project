@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'value' => old($name)
    ];
@endphp

<x-job-board.forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-job-board.forms.field>

