@extends('layouts.center')

@section('content')
    <h1 class="text-center">Games</h1>

    <x-general.flash/>

    <div class="games mb-3">
        @foreach($games as $game)
            <a class="game" href="{{ route('auth.activate', ['game' => $game]) }}">{{ $game->name }}</a>
        @endforeach
    </div>

    <a class="btn btn-primary" href="{{ route('auth.new') }}">New game</a>
@endsection