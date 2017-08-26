<div id="home-content">
    <div id="edit-profile">
        <div class="edit-profile-block">

            <h2>Photo</h2>

            <div class="personal-photo">

                <img src="{{ asset( $user->ava_path ? 'uploads/userPhoto/' . $user->ava_path : 'img/user_default.png' )}}" alt="">

                <input type="file" name="userPhoto" id="userPhoto" class="inputfile" />
                <label for="userPhoto"><i class="fa fa-upload"></i></label>

            </div>


        </div>

        <div class="edit-profile-block">

            <h2>Personal Information</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="personal-inputs" method="post" action="{{ route('editProfileSubmit') }}" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nickname">Nickname</label>
                    <input id="nickname" type="text" name="nickname" value="{{ $user->nickname }}" readonly>
                </div>

                <div class="form-group">
                    <label for="fullname">Full name</label>
                    <input id="fullname" type="text" name="fullname" value="{{ $user->full_name }}">
                </div>

                <div class="form-group">
                     <label for="age">Age</label>
                    <input id="age" type="text" name="age" value="{{ $user->age }}">
                </div>

                <div class="form-group">
                     <label for="location">Location</label>
                    <input id="location" type="text" name="location" value="{{ $user->location }}">
                </div>

                <div class="form-group">
                    <button type="submit" value="Update Information">Update Information</button>
                    <a href="{{route('home')}}">Back to profile</a>
                </div>

            </form>

        </div>

        <div class="edit-profile-block">
            <h2>Achievement</h2>
            <center>Coming soon</center>
        </div>

    </div>
</div>