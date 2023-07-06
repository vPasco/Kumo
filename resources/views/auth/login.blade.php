@extends('layouts.app')

@section('content')


<div id="main-wrapper" class="container ">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0 ">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-3">
                                    <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                </div>

                                <h6 class="h5 mb-0">Welcome back!</h6>
                                <p class="text-muted mt-2 mb-3">Enter your email address and password to access the events.</p>

                                <form method="POST" action="{{ route('login') }}">
                                @csrf

                                    <div class="form-group mb-2">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-2">
                                        <label for="password" >{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                               
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    


                                
                                    <button type="submit" class="btn btn-theme">{{ __('Login') }}</button>

                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="forgot-link float-right text-primary"> {{ __('Forgot Your Password?') }} </a>

                                    @endif
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block ">
                            <div class="account-block rounded">
                                <div class="overlay rounded"></div>
                               
                                
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <p class="text-muted text-center mt-3 mb-5">Don't have an account? <a href="{{ route('register') }}" class="text-primary ml-1">register</a></p>

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>




<x-footer />

@endsection
