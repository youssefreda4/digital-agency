@props(['messages'])

@if ($messages)
<div {{ $attributes->merge(['class' => 'text-danger']) }}>
    @foreach ((array) $messages as $message)
    {{ $message }}
    @endforeach
</div>
@endif