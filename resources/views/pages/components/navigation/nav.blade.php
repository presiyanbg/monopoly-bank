@include('pages.components.navigation.head')
<body>
    <nav class="navigation">
        <div class="content">
            <div class="wrapper">
                <ul>
                    <li>
                        <a href="{{ route("home") }}">
                            @lang('Home')
                        </a>
                    </li>

                    <li>
                        <a href="{{ route("credit.apply") }}">
                            @lang('Apply')
                        </a>
                    </li>

                    <li class="r-180 logo">
                        <a href="{{ route("home") }}">
                            <i class="fas fa-won-sign ab-center"></i>
                        </a>
                    </li>

                    @if (! auth()->user())
                        <li>
                            <a href="{{ route("users.calculator") }}">
                                @lang('Calculator')
                            </a>
                        </li>

                        <li class="link--login">
                            <a href="{{ route("users.login") }}">
                                @lang('Log In')
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route("users.show", auth()->user() )  }}">
                                @lang('Control Panel')
                            </a>
                        </li>

                        <li class="link--logout">
                            <a href="{{ route("users.logout") }}">
                                @lang('log Out')
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
