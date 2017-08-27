<div id="personal-info">

    <div class="personal-photo">
        <img src="{{ $user->ava_path ? asset('uploads/userPhoto/' . $user->ava_path) : asset('img/user_default.png')}}" alt="{{ $user->full_name ? $user->full_name : $user->nickname }}" title="{{ $user->full_name ? $user->full_name : $user->nickname }}">
    </div>

    <div class="info-wrapper">
        <div class="info">

            <div class="full-name">
                <h1>{{ $user->full_name ? $user->full_name : $user->nickname}}</h1>
            </div>

            <div class="personal-age">
                @if( $user->age != null)
                    <span>Age: <strong>{{ $user->age }}</strong></span>
                @endif
            </div>

            <div class="personal-location">
                @if( $user->location != null)
                    <span>Location: <strong>{{ $user->location }}</strong></span>
                @endif
            </div>

            <div class="user-buttons">
                <a href="{{ $nowFollow ? Request::url() . '/unfollow' : Request::url() . '/follow' }}" class="follow-btn {{ $nowFollow ? 'true' : 'false' }}">{{ $nowFollow ? 'Unfollow' : 'Follow' }}</a>
                <a href="#" class="message-btn">Message</a>
            </div>

        </div>
        <div class="info-stats">
            <div class="stats-block">
                <small>Followers</small>
                <span>{{ $countUserFollowers }}</span>
            </div>
            <div class="stats-block">
                <small>Following</small>
                <span>{{ $countUserFollowing }}</span>
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