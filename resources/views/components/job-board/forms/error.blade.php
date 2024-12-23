@props(['error' => false])

@if ($error)
    <p class="">{{ $error }}</p>
@endif
