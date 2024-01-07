@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ }}"> <!-- insert css -->

<!-- section class start here  -->
<div class="container-fluid p-0"><!-- 1  -->
    <div class="card h-100 text-center"><!-- 2  -->
        <div class="card-body"><!-- 3  -->
            <h3 class="card-title fw-bold text-center">Rental Payment List</h3> 

            <div class="d-flex justify-content-center "> <!-- 4  -->
                <table class="table align-middle mb-0 bg-white mt-5 table-responsive-sm table-hover">
                    <thead>
                        <tr>
                            <th class="firstcol">No</th>
                            <th>PAYMENT ID</th>
                            <th>DATE</th>
                            <th>PAYMENT STATUS</th>
                            <th class="lastcol">ACTION</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($payments as $index => $payment)
                            <tr>
                                <td>
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">{{ $index + 1 }}</p>
                                    </div>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1">{{ $payment->paymentID}}</p> 
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $payment->payDate}}</p> 
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $payment->paymentStatus}}</p> 
                                </td>
                                <td>
                                    <div class="btn-group shadow-0" role="group" style="margin-left: -20px">
                                        <button type="button" class="btn btn-link" data-mdb-color="dark"
                                            onclick="window.location='{{ route('updatePayment', ['id' => $payment->paymentID]) }}'">
                                            <i class="fa-solid fa-eye" style="color: #00ff59; font-size: 20px;"></i>
                                        </button>
                                        {{-- Edit button (commented out)
                                        <button type="button" class="btn btn-link" data-mdb-color="dark">
                                            <i class="fa-regular fa-pen-to-square" style="color: #624de3; font-size: 20px;"></i>
                                        </button>
                                        --}}
                                        <button type="button" class="btn btn-link" data-mdb-color="dark" onclick="confirmDelete({{ $payment->paymentID }})">
                                            <i class="fa-regular fa-trash-can" style="color: #a30d11; font-size: 20px;"></i>
                                        </button>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- New Payment Button -->
                <button type="button" class="btn btn-light btn-new-payment mt-3" onclick="window.location='{{ route('addPayment') }}'">
                    NEW PAYMENT
                </button>
            </div><!-- 4  -->
        </div><!-- 3  -->
    </div><!-- 2  -->
</div> <!-- 1  -->

<script>
    function confirmDelete(paymentID) {
        if (confirm('Delete the details?')) {
            // If 'YES' button is clicked
            var result = confirm('DELETED');
            if (result) {
                // If 'RETURN' button is clicked
                window.location.href = '{{ route('viewPayment') }}'; // Redirect to the list of payments
            }
        } else {
            // If 'NO' button is clicked or the user cancels the confirmation
            // Redirect to the list of payments
            window.location.href = '{{ route('viewPayment') }}';
        }
    }
</script>

@endsection
