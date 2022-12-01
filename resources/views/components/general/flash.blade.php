@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
        <div {{ $attributes->merge(['class' => "alert alert-$msg"]) }}>{{ Session::get('alert-' . $msg) }}</div>
    @endif
@endforeach
