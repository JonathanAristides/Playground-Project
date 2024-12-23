@props(['tag', 'size' => 'normal'])

@php
    $classes = 'tag__list-item';

        if($size === 'small') {
            $classes .= ' tag--small';
        }
        if($size === 'normal') {
            $classes .= ' tag--normal';
        }
        if($size === 'large') {
            $classes .= ' tag--large';
        }

@endphp

<li class="{{$classes}}">
    <a class="tag__list-item-link" href="{{ url('tags/' . $tag->name) }}">{{$tag->name}}</a>
</li>
