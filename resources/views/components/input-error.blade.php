@props(['messages'])

{{-- @if ($messages)
    <ul {{ $attributes->merge(['class' => 'alert alert-danger border-0 d-flex align-items-center']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif --}}

@if ($messages)
    <div {{ $attributes->merge(['class' => 'alert alert-danger border-0 d-flex align-items-center']) }} role="alert">
        @foreach ((array) $messages as $message)
            <p class="mb-0 flex-1">{{ $message }}</p>
        @endforeach
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
