<div id="header">
    <div class="header-search">
        <i class="fa fa-search"></i>
    </div>
    <div class="favourite-users">

        @foreach ($users as $user)
            @if ($user->id == auth()->id())
                @continue
            @endif

            <a href="{{ route('user', $user->slug) }}">
                <img src="{{ $user->ava_path ? asset('uploads/userPhoto/' . $user->ava_path) : asset('img/user_default.png')}}" alt="{{ $user->full_name ? $user->full_name : $user->nickname }}" title="{{ $user->full_name ? $user->full_name : $user->nickname }}">
            </a>

        @endforeach

    </div>
    <div class="header-nav">
        <ul>
            <li>
                <a href="#" title="Notification">
                    <i class="fa fa-info-circle"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Settings">
                    <i class="fa fa-cog"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" title="Logout">
                    <i class="fa fa-sign-out"></i>
                </a>
            </li>
        </ul>
    </div>
</div>