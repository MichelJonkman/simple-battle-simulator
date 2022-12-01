@props(['errors'])

@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger']) !!} role="alert">
        <h4>
            {{ __('Oeps! Er is iets verkeerd gegaan.') }}
        </h4>

        <ul class="list-unstyled m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
