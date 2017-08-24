@extends('layouts.app')

@section('title')
    <title>Home - {{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')

    @include('components.base.sidebar')

    <main>
        @include('components.base.header')

        @include('components.home.home-content')
    </main>

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endsection

@section('js')

    <script src="{{ asset('js/home.js') }}"></script>

    <script>
        $("input#userPhoto").on('change', function () {

            var fileName = $(this).val();

            $.ajax({
                url: '{{ route("upload") }}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: new FormData(fileName),
                dataType: 'json',
                contentType: false,
//                cache: false,
                processData: false,
                success:function(response){
                    console.log(response);
                }
            });
        });
    </script>

@endsection
