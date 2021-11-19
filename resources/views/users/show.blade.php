<style>
    body {
        background-color: var(--primary) !important;
    }
</style>

@include('users.components.nav')

<div class="page-with-nav">
    <div class="row justify-content-center mb-1">
        <div class="col-4">
            <div class="card card-40">
                <div class="card-header">
                    @lang("Personal information")
                </div>

                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6 my-auto">
                            @lang("Name")
                        </div>

                        <div class="col-6 my-auto">
                            {{ $user->name ?? '' }}
                        </div>
                    </div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-6 my-auto">
                            @lang("Personal identification number")
                        </div>

                        <div class="col-6 my-auto">
                            {{ $user->pin ?? '' }}
                        </div>
                    </div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-6 my-auto">
                            @lang("Monthly earnings")
                        </div>

                        <div class="col-6 my-auto">
                            {{ $user->earnings ?? '' }}
                        </div>
                    </div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-6 my-auto">
                            @lang("Address")
                        </div>

                        <div class="col-6 my-auto">
                            {{ $user->address ?? '' }}
                        </div>
                    </div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-6 my-auto">
                            @lang("Phone")
                        </div>

                        <div class="col-6 my-auto">
                            {{ $user->phone ?? '' }}
                        </div>
                    </div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-6 my-auto">
                            @lang("Email")
                        </div>

                        <div class="col-6 my-auto">
                            {{ $user->email ?? '' }}
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route("users.edit", $user) }}" class="btn btn-info btn-lg w-100">
                                <i class="fas fa-cogs"></i>

                                <span class="ml-3">
                                    @lang("Edit")
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card w-100 card-40">
                <div class="card-header">
                    @lang("Credit applications")
                </div>

                <div class="card-body">
                    <div class="row text-center font-weight-normal">
                        <div class="col-1 p-0">
                            @lang("ID")
                        </div>

                        <div class="col-3 p-0">
                            @lang("Status")
                        </div>

                        <div class="col-3 p-0">
                            @lang("Amount")
                        </div>

                        <div class="col-1 p-0">
                            @lang("Period")
                        </div>

                        <div class="col-4 p-0">
                            @lang("Send at")
                        </div>
                    </div>

                    <hr>

                    @foreach ($creditApplications as $application)
                        @if ($application->approved == 0)
                            <div class="row text-center border-bottom pb-2 mb-3">
                                <div class="col-1 p-0">
                                    # {{ $application->id ?? ''}}
                                </div>

                                <div class="col-3 p-0">
                                    @lang("In review")
                                </div>

                                <div class="col-3 p-0">
                                    {{ $application->credit_size ?? ''}} $
                                </div>

                                <div class="col-1 p-0">
                                    {{ $application->credit_time_period ?? ''}}
                                </div>

                                <div class="col-4 p-0">
                                    {{ $application->created_at ?? ''}}
                                </div>
                            </div>
                        @else
                            <a href="#" data-application-id={{ $application->id ?? '' }} class="applicaiton-link row text-center border-bottom pb-2 mb-3">
                                <div class="col-1 p-0">
                                    # {{ $application->id ?? ''}}
                                </div>

                                <div class="col-3 p-0">
                                    <strong class="text-success font-weight-light">
                                        @lang("Approved")
                                    </strong>
                                </div>

                                <div class="col-3 p-0">
                                    {{ $application->credit_size ?? ''}} $
                                </div>

                                <div class="col-1 p-0">
                                    {{ $application->credit_time_period ?? ''}}
                                </div>

                                <div class="col-4 p-0">
                                    {{ $application->created_at ?? ''}}
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card w-100 card-40">
                <div class="card-header">
                    @lang("Credits § Credits payments")
                </div>

                <div class="card-body">
                    <div class="row text-center font-weight-normal">
                        <div class="col-1 p-0">
                            @lang("ID")
                        </div>

                        <div class="col-3 p-0">
                            @lang("Credit amount")
                        </div>

                        <div class="col-2 p-0">
                            @lang("Monthly payment")
                        </div>

                        <div class="col-2 p-0">
                            @lang("Credit term")
                        </div>

                        <div class="col-4 p-0">
                            @lang("Sign date")
                        </div>
                    </div>

                    <hr>

                    @forelse ($credits as $credit)
                        <div class="border-bottom pb-1 mb-2">
                            <div class="row text-center">
                                <div class="col-1 p-0">
                                    # {{ $credit->id ?? ''}}
                                </div>

                                <div class="col-3 p-0">
                                    {{ $credit->credit_size ?? ''}} $
                                </div>

                                <div class="col-2 p-0">
                                    {{ $credit->payment_month ?? ''}}
                                </div>

                                <div class="col-2 p-0">
                                    {{ $credit->credit_time_period ?? ''}}
                                </div>

                                <div class="col-4 p-0">
                                    {{ $credit->created_at ?? ''}}
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="row">
                            <div class="col-12 text-center">
                                @lang("No credit contracts available")
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Credit Application --}}
<div class="modal fade" id="credit-application-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="credit-application">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">@lang("Confirm credit")</h3>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas consequuntur fugit nisi? Deserunt, aut dolore. Facere ullam quod iure. Praesentium possimus facilis ipsam iure corporis explicabo alias ad iste vero.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas consequuntur fugit nisi? Deserunt, aut dolore. Facere ullam quod iure. Praesentium possimus facilis ipsam iure corporis explicabo alias ad iste vero.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas consequuntur fugit nisi? Deserunt, aut dolore. Facere ullam quod iure. Praesentium possimus facilis ipsam iure corporis explicabo alias ad iste vero.
            </p>
        </div>

        <div class="modal-footer">
            <div class="row w-100">
                <div class="col-6">
                    <button type="button" class="btn-credit-confirm btn btn-danger btn-lg w-100">@lang("Sign")</button>
                </div>

                <div class="col-6">
                    <button type="button" class="btn btn-secondary btn-lg w-100" data-dismiss="modal">@lang("Close")</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

{{-- Modal Credit Created --}}
<div class="modal fade" id="credit-created" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center w-100" id="exampleModalLongTitle">@lang("Credit agreement signed")</h3>
            </div>

            <div class="modal-footer">
                <div class="row w-100">
                    <button type="button" class="btn w-100 btn-credit-reload btn-primary">@lang("Ok")</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('users.components.footer')

<script>
    $(document).ready(function() {
        let activeCreditApplication = '';

        /**
         * Display Modal for credit conformation.
         **/
        $(document).on('click', '.applicaiton-link', function (event) {
            event.preventDefault();

            $('#credit-application-modal').modal('show');

            activeCreditApplication = $(this).data('application-id');
        });

        /**
         * Confirm credit.
         **/
        $(document).on('click', '.btn-credit-confirm', async function (event) {
            $('#credit-application-modal').modal('hide');

            if (activeCreditApplication) {
                const responce = await $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "/credit-create/" + activeCreditApplication
                    })
                    .done(function() {
                        $( this ).addClass( "done" );
                    })

                if (responce.application_id && responce.application_id == activeCreditApplication) {
                    $('#credit-created').modal('show');
                };
            }
        });

        /**
         * Reload page after credit signed.
         **/
         $(document).on('click', '.btn-credit-reload', function (event) {
            location.reload();
        });
    });
</script>
