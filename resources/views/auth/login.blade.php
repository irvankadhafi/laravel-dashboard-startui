@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom/login.min.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <form class="sign-box" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="sign-avatar">
                <img src="{{asset('img/avatar-sign.png')}}" alt="">
            </div>

            <header class="sign-title">{{ __('Login') }}</header>
            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="checkbox float-left">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <div class="float-right reset">
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-rounded">
                {{ __('Login') }}
            </button>
            <p class="sign-note">New to our website? <a href="{{ route('register') }}">{{ __('Register') }}</a></p>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/custom/lobipanel.min.js') }}"></script>
    <script src="{{ asset('js/custom/matchHeight.js') }}"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
@endpush
