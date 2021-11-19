    <footer class="footer">
        <div class="content">
            <div class="wrapper">
                <ul>
                    <li>
                        <a href="">
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
                            @lang('Calculator')
                        </a>
                    </li>

                    @if (! auth()->user())
                        <li>
                            <a href="{{ route("users.login") }}">
                                @lang('Log In')
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route("users.logout") }}">
                                @lang('log Out')
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
