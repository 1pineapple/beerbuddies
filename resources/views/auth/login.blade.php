@extends('layouts.app')

@section('title')
    <title>{{ config('app.name', 'Laravel') }} - Login page</title>
@endsection

@section('content')

    <div class="login-form-wrapper">

        <img src="{{ asset('/img/logo.png') }}" alt="">

        <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            
            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">

                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" placeholder="Nickname" required autofocus>

                @if ($errors->has('nickname'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                @endif
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Keep me signed in</label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Sign in
                </button>
            </div>
        </form>

        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a>

        <div class="dont-have-acc">
            <span>Do not have an account?</span>
            <a href="{{ route('register') }}">Create an account</a>
        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection