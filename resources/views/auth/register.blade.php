@extends('layouts.register')

@section('content')
    <div class="row ">
        <div class="col-lg-4  bg-white">
            <div class="row align-items-center m-h-100">
                <div class="mx-auto col-md-8">
                    <div class="p-b-20 text-center">
                        <p><img src="{{ URL::asset('assets/img/logo.svg') }}" width="80" alt=""> </p>
                        <p class="admin-brand-content"> MyAn </p>
                    </div>
                    <h3 class="text-center p-b-20 fw-400">{{ __('Register') }}</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group floating-label col-md-12">
                                <label>{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group floating-label col-md-12">
                                <label>{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group floating-label col-md-12">
                                <label>{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group floating-label col-md-12">
                                <label>{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url('assets/img/login.svg');"></div>
    </div>
@endsection
