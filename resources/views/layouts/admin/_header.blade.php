<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
            <div class="nav-wrapper">
                <ul class="navbar-list right">
                    <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button"
                                                     href="#" data-target="translation-dropdown">
                            @if(LaravelLocalization::getCurrentLocaleName() == 'English')
                                <span class="flag-icon flag-icon-gb"></span>
                            @else
                                <span class="flag-icon flag-icon-eg"></span>
                            @endif
                        </a></li>
                    <li><a class="waves-effect waves-block waves-light pink-text"
                           href="{{route('admin.logout')}}">
                            Logout</a>
                    </li>
                </ul>
                <!-- translation-button-->
                <ul class="dropdown-content" id="translation-dropdown">
                    @if(LaravelLocalization::getCurrentLocaleName() == 'Arabic')
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" data-language="en"><i
                                    class="flag-icon flag-icon-gb"></i> English</a></li>
                    @else
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" data-language="en"><i
                                    class="flag-icon flag-icon-eg"></i> Arabic</a></li>
                    @endif
                </ul>
                <!-- notifications-dropdown-->
                <ul class="dropdown-content" id="notifications-dropdown"></ul>
                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown"></ul>
            </div>
        </nav>
    </div>
</header>
