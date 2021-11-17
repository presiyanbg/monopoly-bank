@include('pages.components.navigation.head')
<nav class="navigation">
    <div class="content">
        <ul>
            <li class="link--backhome">
                <a href="{{ route("home") }}">
                    @lang('Home')
                </a>
            </li>

            <li>
                <a href="">
                    @lang('Apply')
                </a>
            </li>

            <li>
                <a href="">
                    @lang('Thing')
                </a>
            </li>
        </ul>
    </div>
</nav>
