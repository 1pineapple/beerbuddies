@extends('layouts.app')

@section('title')
    <title>Edit profile - {{ config('app.name', 'BeerBuddies') }}</title>
@endsection

@section('content')

    @include('components.base.sidebar')

    <main>
        @include('components.base.header')

        @include('components.edit-profile.edit-profile-content')
    </main>

@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}">

@endsection

@section('js')

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
                }
            });
        });
    </script>


@endsection