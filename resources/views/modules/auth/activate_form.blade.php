@extends('layouts.center')

@section('content')
    <h1 class="text-center">Activate {{ $game->name }}</h1>

    <x-general.flash/>

    <form method="post">
        @csrf

        <x-general.errors/>

        <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
            <label class="form-check-label" for="remember">
                Remember
            </label>
        </div>

        <button class="btn btn-primary">Activate</button>
        <a class="btn btn-secondary" href="{{ route('auth.games') }}">Back</a>
    </form>
@endsection