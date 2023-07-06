@extends('layouts.app')

@section('content')


<div id="main-wrapper" class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-3">
                                    <h3 class="h4 font-weight-bold text-theme">Register</h3>
                                </div>

                                
                                <p class="text-muted mt-2 mb-3">Join us for the most exciting events in town by registering with your email and password today.</p>

                                <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mb-2">
                                    <label for="name" >{{ __('Name') }}</label>

                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    
                                    @error('name')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                    @enderror

                                </div>


                                <div class="form-group mb-2">

                                    <label for="email" >{{ __('Email Address') }}</label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            
                                </div>



                                <div class="form-group mb-2">

                                    <label for="password" >{{ __('Password') }}</label>
      
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                </div>

                                <div class="form-group mb-3">

                                    <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                </div>


                                    <button type="submit" class="btn btn-theme">{{ __('Register') }}</button>

                                   
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded">
                                <div class="overlay rounded"></div>
                                <div class="account-testimonial ">
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>


<x-footer />

@endsection
