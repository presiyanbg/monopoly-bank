
<div class="row mb-2">
    <div class="form-group col-12">
        <label for="credit_size" class="form-label">
            @lang("Credit size")
        </label>

        <input type="range" class="slider w-100" min="0" max="100000" value="50000" step="1000" name="credit_size" id="credit_size">

        <div class="d-flex w-100">
            <div class="col-4 text-left">
                <small class="text-secondary font-weight-light">
                    0
                </small>
            </div>

            <div class="col-4 text-center">
                <small class="text-secondary font-weight-light credit-size-preview">
                    50000
                </small>
            </div>

            <div class="col-4 text-right">
                <small class="text-secondary font-weight-light">
                    100000
                </small>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="form-group col-12">
        <label for="credit_time" class="form-label">
            @lang("Months")
        </label>

        <input type="range" class="slider w-100" min="0" max="120" value="60" step="1" name="credit_time_period" id="credit_time">

        <div class="d-flex w-100">
            <div class="col-4 text-left">
                <small class="text-secondary font-weight-light">
                    0
                </small>
            </div>

            <div class="col-4 text-center">
                <small class="text-secondary font-weight-light credit-time-preview">
                    60
                </small>
            </div>

            <div class="col-4 text-right">
                <small class="text-secondary font-weight-light">
                    120
                </small>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row mb-4">
    <span class="col-6">
        @lang("Monthly payment size")
    </span>

    <span class="col-6">
        <span class="badge badge-success font-weight-light monthly-payment w-100">
            1,666.66 $
        </span>
    </span>
</div>

<script>
$( document ).ready(function() {
    function syncMonthlyPayment() {
        console.log($('#credit_time').val());

        $('.monthly-payment').text( (parseInt( $('#credit_size').val() ) / parseInt( $('#credit_time').val() )).toFixed(2) );
    }

    /**
    * Update value of credit size
    **/
    $(document).on('change', '#credit_size', function (event) {
        $('.credit-size-preview').text(this.value);

        syncMonthlyPayment();
    });

    /**
    * Update value of credit time
    **/
    $(document).on('change', '#credit_time', function (event) {
        $('.credit-time-preview').text(this.value);

        syncMonthlyPayment();
    });

});
</script>
