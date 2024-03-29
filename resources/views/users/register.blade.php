@include('pages.components.navigation.nav')

<div class="page-with-nav">
    <div class="card">
        <form action="/register" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-header">
                <h2>
                    @lang("Registration")
                </h2>
            </div>

            <div class="card-body">
                @include('users.form')
            </div>

            <div class="card-footer">
                <button class="btn btn-lg btn-danger w-100" type="submit">
                    @lang("Register")
                </button>
            </div>
        </form>
    </div>
</div>

@include('users.components.footer')
