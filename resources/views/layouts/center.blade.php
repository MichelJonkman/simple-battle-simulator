@extends('base')

@push('styles')
    @vite('resources/scss/app.scss')
@endpush

@section('base_content')
    <div class="layout-center">
        <div class="layout-center-container">
            @yield('content')
        </div>
    </div>
@endsection