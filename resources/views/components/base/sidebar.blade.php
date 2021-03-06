<div id="sidebar">
    <a href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png') }}" class="img-responsive" alt="BeerBuddies">
    </a>

    <div class="nav-sidebar">
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('feed') }}" class="{{ Route::currentRouteName() == 'feed' ? 'active' : '' }}">
                    <span>Feed</span></a>
            </li>
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<span>Messages</span>--}}
                    {{--<span class="notification-count">6789</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li>
                <a href="{{ route('users') }}" class="{{ Route::currentRouteName() == 'users' ? 'active' : '' }}">
                    <span>Users</span>
                    {{--<span class="notification-count">345</span>--}}
                </a>
            </li>
        </ul>
    </div>

    <p class="copyright">Vania Kucher © 2017</p>
</div>