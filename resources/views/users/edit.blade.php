@include('users.components.nav')

<div class="page-with-nav">
    <div class="card">
        <form action="{{ route("users.update", $user) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="card-header">
                <h2>
                    @lang("Edit")
                </h2>
            </div>

            <div class="card-body">
                @include('users.form')
            </div>

            <div class="card-footer">
                <button class="btn btn-lg btn-danger w-100" type="submit">
                    @lang("Edit")
                </button>
            </div>
        </form>
    </div>
</div>

@include('users.components.footer')
