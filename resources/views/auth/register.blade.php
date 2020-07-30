@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom/login.min.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <form class="sign-box" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="sign-avatar no-photo">&plus;</div>
            <header class="sign-title">{{ __('Register') }}</header>
            <div class="form-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
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
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
            </div>

            <button type="submit" class="btn btn-rounded">
                {{ __('Register') }}
            </button>
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
