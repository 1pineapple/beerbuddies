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
            <div class="stats-block" data-toggle="modal" data-target="#followers">
                <small>Followers</small>
                <span>{{ $countFollowers }}</span>
            </div>
            <div class="stats-block" data-toggle="modal" data-target="#following">
                <small>Following</small>
                <span>{{ $countFollowing }}</span>
            </div>
            <div class="stats-block">
                <small>Achievements</small>
                <span>{{ $user->achievements->count() }}</span>
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
        @foreach($user->achievements as $achievement)
            <div class="achievement-item">
                <img src="{{ asset('img/achievements/' . $achievement->img ) }}" class="img-responsive" alt="{{ $achievement->title }}" title="{{ $achievement->description }}">
            </div>
        @endforeach
    </div>
</div>

<div id="banner-350-250" style="margin-left: 30px;"></div>

<!-- Modal -->
<div id="followers" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Followers</h4>
            </div>
            <div class="modal-body">

                <ul>
                    @foreach($user->followers as $follower)
                        <li>
                            <a href="/user/{{ $follower->slug }}">
                                <img src="{{ $follower->ava_path ? asset('uploads/userPhoto/' . $follower->ava_path) : asset('img/user_default.png')}}" alt="{{ $follower->full_name ? $follower->full_name : $follower->nickname }}" title="{{ $follower->full_name ? $follower->full_name : $follower->nickname }}">
                                {{ $follower->full_name ? $follower->full_name : $follower->nickname }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    </div>
</div>

<div id="following" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Following</h4>
            </div>
            <div class="modal-body">

                <ul>
                    @foreach($user->following as $follow)
                        <li>
                            <a href="/user/{{ $follow->slug }}">
                                <img src="{{ $follow->ava_path ? asset('uploads/userPhoto/' . $follow->ava_path) : asset('img/user_default.png')}}" alt="{{ $follow->full_name ? $follow->full_name : $follow->nickname }}" title="{{ $follow->full_name ? $follow->full_name : $follow->nickname }}">
                                <span>{{ $follow->full_name ? $follow->full_name : $follow->nickname }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

    </div>
</div>