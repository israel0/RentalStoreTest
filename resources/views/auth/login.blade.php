@extends('layouts.login')
{{-- 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@section('content')

<div class="container px-sm-10">
    <div class="grid columns-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="g-col-2 g-col-xl-1 d-none d-xl-flex flex-column min-vh-screen">
            <a href="" class="-intro-x d-flex align-items-center pt-5">
              
                <span class="text-white fs-lg ms-3"> Rental<span class="fw-medium">Store</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Rubick Bootstrap HTML Admin Template" class="-intro-x w-1/2 mt-n16" src="dist/images/illustration.svg">
                <div class="-intro-x text-white fw-medium fs-4xl lh-base mt-10">
                    A few more clicks to 
                    <br>
                    sign in to your account.
                </div>
                <div class="-intro-x mt-5 fs-lg text-white text-opacity-70 dark-text-gray-500">Manage all your e-commerce accounts in one place</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="g-col-2 g-col-xl-1 h-screen h-xl-auto d-flex py-5 py-xl-0 my-10 my-xl-0">

        <form method="POST" action="{{ route('login') }}">
                @csrf
  
            <div class="my-auto mx-auto ms-xl-20 bg-white dark-bg-dark-1 bg-xl-transparent px-5 px-sm-8 py-8 p-xl-0 rounded-2 shadow-md shadow-xl-none w-full w-sm-3/4 w-lg-2/4 w-xl-auto">
                <h2 class="intro-x fw-bold fs-2xl fs-xl-3xl text-center text-xl-start">
                    Sign In
                </h2>
                <div class="intro-x mt-2 text-gray-500 d-xl-none text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                <div class="intro-x mt-8">
                    <input type="email" class="intro-x login__input form-control py-3 px-4 border-gray-300 d-block mt-4  @error('email') is-invalid @enderror" id="email" type="email" name="email" required autocomplete="Email Address">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <input type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 d-block mt-4  @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                
                </div>
                <div class="intro-x d-flex text-gray-700 dark-text-gray-600 fs-xs fs-sm-sm mt-4">
                    <div class="d-flex align-items-center me-auto">
                        <input id="remember-me" type="checkbox" class="form-check-input border me-2">
                        <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                    </div>
                    <a href="">Forgot Password?</a> 
                </div>
                <div class="intro-x mt-5 mt-xl-8 text-center text-xl-start">
                    <button class="btn btn-primary py-3 px-4 w-full w-xl-32 me-xl-3 align-top">Login</button>
                    <button class="btn btn-outline-secondary py-3 px-4 w-full w-xl-32 mt-3 mt-xl-0 align-top">Sign up</button>
                </div>
                <div class="intro-x mt-10 mt-xl-24 text-gray-700 dark-text-gray-600 text-center text-xl-start">
                    By signin up, you agree to our 
                    <br>
                    <a class="text-theme-1 dark-text-theme-10" href="">Terms and Conditions</a> & <a class="text-theme-1 dark-text-theme-10" href="">Privacy Policy</a> 
                </div>
            </div>
        </form>

        </div>
        <!-- END: Login Form -->
    </div>
</div>

@endsection 







