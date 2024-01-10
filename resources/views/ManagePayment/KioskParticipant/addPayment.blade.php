@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/ManagePayment/addPayment.css') }}"> <!-- insert css -->

<!-- section class start here  -->
<div class="container-fluid p-0"><!-- 1  -->
    <div class="card h-100 text-center"><!-- 2  -->
        <div class="card-body"><!-- 3  -->
            <h3 class="card-title fw-bold text-center">PAYMENT NEW DETAIL</h3> 
            <div class="d-flex justify-content-center "> <!-- 4  -->

                <!-- Payment Details Form -->
                <form method="post" action="{{ route('storePayment') }}" enctype="multipart/form-data" id="paymentrecords">
                    @csrf <!-- CSRF Token -->

                    <!-- Date Input -->
                    <div class="row mb-3">
                        <label for="payDate" class="col-sm-3 col-form-label">DATE:</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="payDate" name="payDate" required>
                        </div>
                    </div>

                    <!-- Payment Detail Input -->
                    <div class="row mb-3">
                        <label for="payDetail" class="col-sm-3 col-form-label">PAYMENT DETAIL:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="payDetail" name="payDetail" rows="3" required></textarea>
                        </div>
                    </div>

                    <!-- File Input for Receipt for the input-->
                    <div class="row mb-3">
                        <label for="payProof" class="col-sm-3 col-form-label">UPLOAD RECEIPT:</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="payProof" name="payProof" accept=".pdf, .png, .jpg" required>
                        </div>
                    </div>

                    <!-- QR Code Image -->
                    <div class="row mb-3">
                        <label for="payQR" class="col-sm-3 col-form-label">QR Payment:</label>
                        <div class="col-sm-9">
                            <img src="{{ asset('app/public/assets/QR.png.jpg') }}" alt="QR Code" class="img-fluid">
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-center">
                        <!-- Cancel Button -->
                        <button type="button" class="btn btn-secondary me-3" onclick="window.location='{{ route('viewPayment')}}'">CANCEL</button>

                        <!-- Submit Button with Confirmation -->
                        <button type="button" class="btn btn-primary" onclick="showConfirmation()">SUBMIT</button>
                    </div>
                </form>

            </div><!-- 4  -->
        </div><!-- 3  -->
    </div><!-- 2  -->
</div> <!-- 1  -->

<!-- JavaScript for Confirmation Dialog -->
<script>
    function showConfirmation() {
        if (confirm('Do you want to proceed?')) {
            // If 'YES' button is clicked
            submitForm();
        } else {
            // If 'NO' button is clicked
        }
    }

    function submitForm() {
        // Submit the form
        document.getElementById('paymentrecords').submit();
        window.location.href = '{{ route('viewPayment') }}';
    }
</script>

@endsection
