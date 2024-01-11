@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/ManagePayment/updatePayment.css') }}"> <!-- insert css -->

<!-- section class start here  -->
<div class="container-fluid p-0"><!-- 1  -->
    <div class="card h-100 text-center"><!-- 2  -->
        <div class="card-body"><!-- 3  -->
            <h3 class="card-title fw-bold text-center">UPDATE PAYMENT DETAIL</h3> 

            <div class="d-flex justify-content-center "> <!-- 4  -->

                <!-- Display Payment Details -->
                <div class="mb-3">
                    <label for="paymentID" class="form-label">PAYMENT ID:</label>
                    <span>{{ $paymentRecord->paymentID }}</span>
                </div>

                <div class="mb-3">
                    <label for="payDate" class="form-label">DATE:</label>
                    <span>{{ $paymentRecord->payDate }}</span>
                </div>

                <div class="mb-3">
                    <label for="paymentStatus" class="form-label">PAYMENT STATUS:</label>
                    <span>{{ $paymentRecord->paymentStatus }}</span>
                </div>

                <div class="mb-3">
                    <label for="payDetail" class="form-label">PAYMENT DETAIL:</label>
                    <span>{{ $paymentRecord->payDetail }}</span>
                </div>

                <div class="mb-3">
                    <label for="payProof" class="form-label">PAYMENT PROOF:</label>
                    <span>{{ $paymentRecord->payProof }}</span>
                </div>

                <div class="mb-3">
                    <label for="payInvoice" class="form-label">INVOICE PAYMENT:</label>
                    <span>{{ $paymentRecord->payInvoice }}</span>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-center">
                    <!-- Update Button with Confirmation Dialog -->
                    <button type="button" class="btn btn-primary me-3" onclick="confirmUpdate()">UPDATE</button>

                    <!-- Return Button -->
                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('viewPayment') }}'">RETURN</button>
                </div>
            </div><!-- 4  -->
        </div><!-- 3  -->
    </div><!-- 2  -->
</div> <!-- 1  -->

<!-- JavaScript for Confirmation Dialog -->
<script>
    function confirmUpdate() {
        if (confirm('Do you want to proceed with the update?')) {
            // If 'YES' button is clicked
            // You can add the logic to perform the update here
            // For now, just display a success message
            alert('Update successful!');
        } else {
            // If 'NO' button is clicked
            // You can add any additional action or leave it as is
        }
    }
</script>

@endsection
