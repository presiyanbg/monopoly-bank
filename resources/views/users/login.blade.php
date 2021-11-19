@include('pages.components.navigation.nav')

<body>
    <div class="page-with-nav">
        <div class="card">
            <form action="{{ route("users.authenticate") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h2>
                        @lang("Log in")
                    </h2>
                </div>

                <div class="card-body">
                    <div class="row mb-1">
                        <div class="form-group col-12">
                            <label for="username">
                                @lang("Username")
                            </label>

                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                    </div>

                    <div class="row mb-1">
                        <div class="form-group col-12">
                            <label for="username">
                                @lang("Password")
                            </label>

                            <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-lg btn-danger w-100" type="submit">
                                @lang("Log in")
                            </button>
                        </div>

                        <div class="col-6">
                            <a href="{{ route('users.register') }}" class="btn btn-lg btn-secondary w-100">
                                @lang("Register")
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
