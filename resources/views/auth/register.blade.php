@extends('layouts.app')

@section('title')
    <title>{{ config('app.name', 'Laravel') }} - Registration page</title>
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">--}}
                            {{--<label for="nickname" class="col-md-4 control-label">Nickname</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" required autofocus>--}}

                                {{--@if ($errors->has('nickname'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('nickname') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@section('content')

    <div class="login-form-wrapper">

        <img src="{{ asset('/img/logo.png') }}" alt="">

        <form class="login-form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">

                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" placeholder="Nickname" required autofocus>

                @if ($errors->has('nickname'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
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
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Sign up
                </button>
            </div>
        </form>

        <div class="have-acc">
            <span>Do you have an account?</span>
            <a href="{{ route('register') }}">Sign in</a>
        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection