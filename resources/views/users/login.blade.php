@include('pages.components.navigation.nav')

<body>
    <div class="page-with-nav">
        <div class="login-card d-flex align-items-stretch flex-row">
            <div class="side-left col-12 col-md-6 p-0">
                <form action="{{ route("users.authenticate") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="header">
                        <h2>
                            @lang("Log in")
                        </h2>
                    </div>

                    <div class="body">
                        <div class="row mb-1">
                            <div class="form-group col-12">
                                <label for="username">
                                    @lang("Username")
                                </label>

                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="form-group col-12">
                                <label for="username">
                                    @lang("Password")
                                </label>

                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>

                    <div class="footer">
                        <button class="btn btn-lg btn-info px-5 mr-3" type="submit">
                            @lang("Log in")
                        </button>

                        <a href="{{ route('users.register') }}" class="btn btn-lg btn-secondary px-5">
                            @lang("Register")
                        </a>
                    </div>
                </form>
            </div>

        <div class="side-right col-12 col-md-6 p-0">
            <div class="login-wallpaper">
                <img src="{{URL::asset('/images/login.png')}}" alt="Login wallpaper">
            </div>
        </div>
    </div>
</body>
</html>
