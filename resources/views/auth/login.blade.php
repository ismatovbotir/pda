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
        <div class="col-lg-8">

          <div class="card-group d-block d-md-flex row">
            <div class="card col-md-7 p-4 mb-0">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-body-secondary">Sign In to your account</p>
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                      </svg></span>
                    <input class="form-control" type="email" placeholder="Username" name="email">
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                      </svg></span>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">Login</button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card col-md-5 text-white bg-primary py-5">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a  href="{{route('register')}}" class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</a>
                </div>
              </div>
            </div>
          </div>
       

        </div>
      </div>
    </div>
  </div>
  @endsection
 