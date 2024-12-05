@extends('layouts.app')
@section('left')
  @endsection
  @section('contentHead')
  @endsection
  @section('left')
  @endsection
  @section('contentBody')
<div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 mx-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="card-body p-4">
                                <h1>Register</h1>
                                <p class="text-body-secondary">Create your account</p>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>

                                        </svg></span>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                                        </svg></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                                        </svg></span>
                                    <input class="form-control" type="password" placeholder="Repeat password" name="password_confirmation">
                                </div>
                                <button class="btn btn-block btn-success" type="submit">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection