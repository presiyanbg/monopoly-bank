@include('pages.components.navigation.nav')

<div class="page-with-nav">
    <div class="card">
        <form action="{{ route('credit.apply.store') }}">
            <div class="card-header">
                <h2>
                    @lang("Apply for a credit.")
                </h2>
            </div>

            <div class="card-body">
                @if (! auth()->user())
                    <div class="row mb-3">
                        <div class="col-12 text-center">
                            <h3>
                                @lang("To apply you first need to log in into your account.")
                            </h3>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <div class="display-1 text-secondary">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <a class="btn btn-success btn-lg w-100" href="{{ route("users.login") }}">
                                @lang('Log In')
                            </a>
                        </div>
                    </div>
                @else
                    @include('users.credit-apply.form')
                @endif
            </div>

            @if (auth()->user())
            <div class="card-footer">
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-lg btn-success w-100">
                            @lang("Apply")
                        </button>
                    </div>
                </div>
            </div>
            @endif
        </form>
    </div>
</div>
