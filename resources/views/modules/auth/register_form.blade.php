@extends('layouts.center')

@section('content')
    <h1 class="text-center">New game</h1>
    <form method="post">
        @csrf

        <x-general.session-status class="mb-4" :status="session('status')"/>
        <x-general.errors class="mb-4"/>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
        </div>
        <div class="mb-3">
            <label for="password-repeat" class="form-label">Repeat password</label>
            <input type="password" class="form-control" id="password-repeat" name="password_repeat" value="{{ old('password_repeat') }}">
        </div>
        <button class="btn btn-primary">Create</button>
        <a class="btn btn-secondary" href="/login">Back</a>
    </form>
@endsection