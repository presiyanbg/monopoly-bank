@if (! auth()->user())
    @include('pages.components.navigation.nav')
@else
    @include('users.components.nav')

    <style>
        body {
            background-color: var(--primary) !important;
        }
    </style>
@endif

<div class="page-with-nav">
    <div class="d-flex justify-content-center">
        <div class="col-8">

            <div class="card w-100">
                <div class="card-header">
                    <h2>
                        @lang("Credit calculator")
                    </h2>
                </div>

                <div class="card-body">
                    @include('users.credit-apply.form')
                </div>
            </div>
        </div>
    </div>
</div>

@include('users.components.footer')
