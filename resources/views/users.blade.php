@extends('layouts.app')

@section('title')

    <title>Followers - {{ config('app.name', 'BeerBuddies') }}</title>

@endsection

@section('content')

    @include('components.base.sidebar')

    <main>

        @include('components.base.header')

        @include('components.users-page.users-page-content')

    </main>

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users-page.css') }}">

@endsection

@section('js')

    <script src="{{ asset('js/users.js') }}"></script>

@endsection
