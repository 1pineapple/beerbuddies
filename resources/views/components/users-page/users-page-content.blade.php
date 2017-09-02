<div id="home-content">

    <div class="flex-row">

        <div id="users-page">

            <div class="tabs">
                <span class="tab">
                    <h2>Followers</h2>
                </span>
                <span class="tab">
                     <h2>Following</h2>
                </span>
            </div>
            <div class="tab_content">
                <div class="tab_item">

                    @foreach($user->followers as $follower)
                        <ul>
                            <li>
                                <a href="/user/{{ $follower->slug }}">
                                    <img src="{{ $follower->ava_path ? asset('uploads/userPhoto/' . $follower->ava_path) : asset('img/user_default.png')}}" alt="{{ $follower->full_name ? $follower->full_name : $follower->nickname }}" title="{{ $follower->full_name ? $follower->full_name : $follower->nickname }}">
                                    <span class="follow-info">
                                        <span class="follow-name">{{ $follower->full_name ? $follower->full_name : $follower->nickname }}</span>
                                        <span class="follow-location">{{ $follower->location ? $follower->location : 'BeerCity' }}</span>
                                    </span>
                                </a>
                            </li>
                        </ul>

                    @endforeach

                </div>
                <div class="tab_item">

                    @foreach($user->following as $follow)
                        <ul>
                            <li>
                                <a href="/user/{{ $follow->slug }}">
                                    <img src="{{ $follow->ava_path ? asset('uploads/userPhoto/' . $follow->ava_path) : asset('img/user_default.png')}}" alt="{{ $follow->full_name ? $follow->full_name : $follow->nickname }}" title="{{ $follow->full_name ? $follow->full_name : $follow->nickname }}">
                                    <span class="follow-info">
                                        <span class="follow-name">{{ $follow->full_name ? $follow->full_name : $follow->nickname }}</span>
                                        <span class="follow-location">{{ $follow->location ? $follow->location : 'BeerCity' }}</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</div>
