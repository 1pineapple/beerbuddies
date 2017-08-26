<div id="personal-info">

    <div class="personal-photo">
        <img src="{{ Auth::user()->ava_path ? asset('uploads/userPhoto/' . Auth::user()->ava_path) : 'img/user_default.png'}}" alt="">
        <input type="file" name="userPhoto" id="userPhoto" class="inputfile" />
        <label for="userPhoto"><i class="fa fa-upload"></i></label>
    </div>

    <div class="info-wrapper">
        <div class="info">
            <div class="full-name">
                <h1>{{ Auth::user()->full_name ? Auth::user()->full_name : Auth::user()->nickname}}</h1>
            </div>

            <div class="personal-age">
                @if( Auth::user()->age != null)
                    <span>Age: <strong>{{ Auth::user()->age }}</strong></span>
                @endif
            </div>

            <div class="personal-location">
                @if( Auth::user()->location != null)
                    <span>Location: <strong>{{ Auth::user()->location }}</strong></span>
                @endif
            </div>

            <div class="edit-profile">
                <a href="{{ route('editProfile') }}">Edit profile</a>
            </div>
        </div>
        <div class="info-stats">
            <div class="stats-block">
                <small>Followers</small>
                <span>50</span>
            </div>
            <div class="stats-block">
                <small>Following</small>
                <span>123</span>
            </div>
            <div class="stats-block">
                <small>Achievements</small>
                <span>4567</span>
            </div>
        </div>
    </div>

</div>

<div id="personal-achievement">
    <div class="title-achievement">
        <a href="#">
            <h2>Achievement</h2>
        </a>
    </div>

    <div class="list-achievement">
        <div class="achievement-item">
            <img src="{{ asset('img/achievement.png') }}" class="img-responsive" alt="Achievements to register on BeerBuddies" title="Achievements to register on BeerBuddies">
        </div>
    </div>
</div>

<div id="banner-350-250" style="margin-left: 30px;"></div>