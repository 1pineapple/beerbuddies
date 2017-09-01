<div id="home-content">

    <div class="flex-row" id="users-page">

        <div class="followers-users">

            <h2>Followers</h2>

            @foreach($user->followers as $follower)

                <li>
                    <a href="/user/{{ $follower->slug }}">
                        <img src="{{ $follower->ava_path ? asset('uploads/userPhoto/' . $follower->ava_path) : asset('img/user_default.png')}}" alt="{{ $follower->full_name ? $follower->full_name : $follower->nickname }}" title="{{ $follower->full_name ? $follower->full_name : $follower->nickname }}">
                        {{ $follower->full_name ? $follower->full_name : $follower->nickname }}
                    </a>
                </li>

            @endforeach

        </div>

        <div class="following-users">

            <h2>Following</h2>

            @foreach($user->following as $follow)
                <li>
                    <a href="/user/{{ $follow->slug }}">
                        <img src="{{ $follow->ava_path ? asset('uploads/userPhoto/' . $follow->ava_path) : asset('img/user_default.png')}}" alt="{{ $follow->full_name ? $follow->full_name : $follow->nickname }}" title="{{ $follow->full_name ? $follow->full_name : $follow->nickname }}">
                        <span>{{ $follow->full_name ? $follow->full_name : $follow->nickname }}</span>
                    </a>
                </li>
            @endforeach

        </div>

    </div>

</div>
