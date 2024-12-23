@props(['label', 'name'])

<div>
    @if ($label)
        <x-job-board.forms.label :$name :$label/>
    @endif

    <div>
        {{ $slot }}

        <x-job-board.forms.error :error="$errors->first($name)"/>
    </div>
</div>
