@extends('base')

@section('base_content')
    <div id="app" data-app="{{ json_encode($data) }}"></div>

    @routes
    @vite('resources/ts/app.ts')
@endsection