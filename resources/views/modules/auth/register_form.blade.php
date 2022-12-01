@extends('layouts.center')

@section('content')
    <h1 class="text-center">New game</h1>
    <div class="d-flex justify-content-center">
        <form class="col col-sm-9">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password-repeat" class="form-label">Repeat password</label>
                <input type="password" class="form-control" id="password-repeat" name="password-repeat">
            </div>
        </form>
    </div>
@endsection