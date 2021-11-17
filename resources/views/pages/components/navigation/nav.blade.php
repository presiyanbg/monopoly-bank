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
                        <a href="">
                            @lang('Apply')
                        </a>
                    </li>

                    <li class="r-180 logo">
                        <a href="{{ route("home") }}">
                            <i class="fas fa-won-sign ab-center"></i>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            @lang('Thing')
                        </a>
                    </li>

                    <li class="link--login">
                        <a href="{{ route("users.login") }}">
                            @lang('Long In')
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
