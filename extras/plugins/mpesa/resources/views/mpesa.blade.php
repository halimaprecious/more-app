<div class="row payment-plugin" id="mpesaPayment" style="display: none;">
    <div class="col-md-10 col-sm-12 box-center center mt-4 mb-0">
        <div class="row">

            <div class="col-xl-6 mt-4">
                <h4>{{ trans('mpesa::messages.instructions') }}</h4>
                <p>{{ trans('mpesa::messages.enter_phone_number') }}</p>
                <p>{{ trans('mpesa::messages.enter_mpesa_pin') }}</p>
                <div class="form-group">
                    <label for="mpesaPhoneNumber">{{ trans('mpesa::messages.Phone Number') }}</label>
                    <input type="text" class="form-control" id="mpesaPhoneNumber"
                        placeholder="07********" required>
                </div>
            </div>
            <div class="col-xl-6 text-center">
                <img class="img-fluid" src="{{ url('images/mpesa/payment.png') }}"
                    title="{{ trans('mpesa::messages.Payment with Mpesa') }}" alt="mpesa-logo">
            </div>




        </div>
    </div>
</div>



@section('after_scripts')
    @parent
    <script>
        $(document).ready(function() {
            var selectedPackage = $('input[name=package_id]:checked').val();
            var packagePrice = getPackagePrice(selectedPackage);
            var paymentMethod = $('#paymentMethodId').find('option:selected').data('name');

            /* Check Payment Method */
            checkPaymentMethodForMpesa(paymentMethod, packagePrice);

            $('#paymentMethodId').on('change', function() {
                paymentMethod = $(this).find('option:selected').data('name');
                checkPaymentMethodForMpesa(paymentMethod, packagePrice);
            });
            $('.package-selection').on('click', function() {
                selectedPackage = $(this).val();
                packagePrice = getPackagePrice(selectedPackage);
                paymentMethod = $('#paymentMethodId').find('option:selected').data('name');
                checkPaymentMethodForMpesa(paymentMethod, packagePrice);
            });

            /* Send Payment Request */
            $('#submitPostForm').on('click', function(e) {
                e.preventDefault();

                paymentMethod = $('#paymentMethodId').find('option:selected').data('name');

                if (paymentMethod != 'mpesa' || packagePrice <= 0) {
                    return false;
                }
                var formData = $('#postForm').serialize();
                console.log(formData);
                var phoneNumber = $('#mpesaPhoneNumber').val();
                $('#postForm').append('<input type="hidden" name="mpesa_phone_number" value="' + phoneNumber + '">');
                var paymentMethodName = $('#paymentMethodId').find('option:selected').data('name');
                $('#postForm').append('<input type="hidden" name="payment_method_name" value="' + paymentMethodName +
                    '">');
                var phoneRegex = /^07\d{8}$/;
                if (!phoneRegex.test(phoneNumber) && paymentMethod == 'mpesa') {
                    alert('Please enter a valid phone number');
                    $('#postForm').find('input[name=mpesa_phone_number]').remove();
                    return false;
                }


                $('#postForm').submit();

                /* Prevent form from submitting */
                return false;
            });
        });

        function checkPaymentMethodForMpesa(paymentMethod, packagePrice) {
            if (paymentMethod == 'mpesa' && packagePrice > 0) {
                $('#mpesaPayment').show();

            } else {
                $('#mpesaPayment').hide();
            }
        }
    </script>
@endsection
