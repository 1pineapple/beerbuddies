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

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $("input#userPhoto").on('change', function () {

            var file = this.files[0];
            var data = new FormData();
            data.append('userPhoto', file);

            $.ajax({
                url: '{{ route("upload") }}',
                type: 'POST',
                data: data,
                dataType: 'json',
                contentType: false,
//                cache: false,
                processData: false,
                success:function(response){
                    $('.personal-photo img').attr('src', response.url);
                    console.log(response.exist);
                    console.log(response.url);
                }
            });
        });
    </script>

@endsection
