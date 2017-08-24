<div id="personal-info">

    <div class="personal-photo">
        <img src="{{ Auth::user()->ava_path ? asset('uploads/users/' . Auth::user()->ava_path) : 'img/user_default.png'}}" alt="">
        <input type="file" name="userPhoto" id="userPhoto" class="inputfile" />
        <label for="userPhoto"><i class="fa fa-upload"></i></label>
    </div>

    <div class="info">
        <div class="full-name">
            <h1>{{ Auth::user()->full_name ? Auth::user()->full_name : Auth::user()->nickname}}</h1>
        </div>

        <div class="personal-age">
            <span>Age: <strong>22</strong></span>
        </div>

        <div class="personal-location">
            <span>Location: <strong>UA, Ternopil</strong></span>
        </div>
    </div>

</div>