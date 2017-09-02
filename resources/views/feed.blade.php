@extends('layouts.app')

@section('title')
    <title>Feed - {{ config('app.name', 'BeerBuddies') }}</title>
@endsection

@section('content')

    @include('components.base.sidebar')

    <main>

        @include('components.base.header')

        @include('components.feed.feed-content')

    </main>

@endsection

@section('css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/stefangabos/Zebra_Datepicker/dist/css/bootstrap/zebra_datepicker.min.css">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="stylesheet" href="{{ asset('css/feed.css') }}">

@endsection

@section('js')

    <script src="{{ asset('js/home.js') }}"></script>

@endsection
