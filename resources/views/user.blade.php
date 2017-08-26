@extends('layouts.app')

@section('title')
    <title>{{ $user->full_name ? $user->full_name : $user->nickname }} - {{ config('app.name', 'BeerBuddies') }}</title>
@endsection

@section('content')

    @include('components.base.sidebar')

    <main>
        @include('components.base.header')

        @include('components.user.user-content')
    </main>

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endsection

@section('js')

    <script src="{{ asset('js/home.js') }}"></script>

@endsection
