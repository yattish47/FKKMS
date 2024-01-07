@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ }}"> <!-- insert css -->

<!-- section class start here  -->
<div class="container-fluid p-0"><!-- 1  -->
    <div class="card h-100 text-center"><!-- 2  -->
        <div class="card-body"><!-- 3  -->
            <h3 class="card-title fw-bold text-center">Payment New Detail</h3> 
            <div class="d-flex justify-content-center "> <!-- 4  -->

                <!-- Payment Details Form -->
                <form method="post" action="{{ route('storePayment') }}" enctype="multipart/form-data" id="paymentForm">
                    @csrf <!-- CSRF Token -->

                    <!-- DateTime Input -->
                <div class="mb-3">
                    <label for="datetime" class="form-label">Date and Time</label>
                    <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
                </div>

                    <!-- Payment Detail Input -->
                    <div class="mb-3">
                        <label for="payment_detail" class="form-label">Payment Detail</label>
                        <textarea class="form-control" id="payment_detail" name="payment_detail" rows="3" required></textarea>
                    </div>

                    <!-- File Input for Receipt -->
                    <div class="mb-3">
                        <label for="receipt" class="form-label">Please upload your receipt here</label>
                        <input type="file" class="form-control" id="receipt" name="receipt" accept="image/*" required>
                    </div>

                    <!-- Payment Proof Input -->
                    <div class="mb-3">
                        <label for="payment_proof" class="form-label">Payment Proof (PDF, PNG, JPG)</label>
                        <input type="file" class="form-control" id="payment_proof" name="payment_proof" accept=".pdf, .png, .jpg" required>
                    </div>

                    <!-- QR Code Image -->
                    <div class="mb-3">
                        <img src="{{ asset('path/to/your/qr/image.png') }}" alt="QR Code" class="img-fluid">
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-center">
                        <!-- Cancel Button -->
                        <button type="button" class="btn btn-secondary me-3" onclick="window.location='{{ route('viewPayment') }}'">CANCEL</button>
                        
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
            // You can add any additional action or leave it as is
        }
    }

    function submitForm() {
        // Submit the form
        document.getElementById('paymentForm').submit();
    }
</script>

@endsection
