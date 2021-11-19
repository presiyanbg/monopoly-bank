@include('pages.components.navigation.head')
<nav class="navigation navigation-white">
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

                <li>
                    <a href="#">
                        @lang('Calculator')
                    </a>
                </li>

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
            </ul>
        </div>
    </div>
</nav>
