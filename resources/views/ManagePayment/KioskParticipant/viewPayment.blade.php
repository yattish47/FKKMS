@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/ManageKiosk/listofkioskapplication.css') }}"> <!-- insert css -->

<style>
        .btn-new-payment {
            display: block;
            margin-top: 40px; /* Adjust the margin as needed */
            background-color: #DDD5F3;
            color: #000;
            font-size: 12px;
            border: 2px solid #000;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

    .btn-new-payment:hover {
        background-color: #ADD8E6; /* Light blue color */
        color: #000;
    }
</style>

<!-- section class start here  -->
<div class="container-fluid p-4"><!-- 1  -->
    <div class="card h-100 text-center"><!-- 2  -->
        <div class="card-body"><!-- 3  -->
            <h3 class="card-title fw-bold text-center">Rental Payment List</h3> 

            <div class="d-flex justify-content-center "> <!-- 4  -->
                <table class="table align-middle mb-0 bg-white mt-5 table-responsive-sm table-hover">
                    <thead>
                        <tr>
                            <th class="firstcol">PAYMENT ID</th>
                            <th>DATE</th>
                            <th>PAYMENT STATUS</th>
                            <th class="lastcol">ACTION</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($paymentrecords as $paymentrecords)
                    <tr>
 
                         <td>
                            <p class="fw-normal mb-1">{{ $paymentrecords->paymentID}}</p> 
                        </td>
                         <td>
                            <p class="fw-normal mb-1">{{ $paymentrecords->payDate}}</p> 
                        </td>
                         <td>
                            <p class="fw-normal mb-1">{{ $paymentrecords->payStatus}}</p> 
                         </td>
                        <td>
                            <div class="btn-group shadow-0" role="group" style="margin-left: -20px">
                                <button type="button" class="btn btn-link" data-mdb-color="dark"
                                onclick="window.location='{{ route('updatePayment', ['id' => $paymentrecords->paymentID]) }}'">
                                    <i class="fa-solid fa-eye" style="color: #00ff59; font-size: 20px;"></i>
                                </button>
                                {{-- Edit button (commented out)
                                <button type="button" class="btn btn-link" data-mdb-color="dark">
                                    <i class="fa-regular fa-pen-to-square" style="color: #624de3; font-size: 20px;"></i>
                                </button>
                                --}}
                                <button type="button" class="btn btn-link" data-mdb-color="dark" onclick="confirmDelete({{ $paymentrecords->paymentID }})">
                                    <i class="fa-regular fa-trash-can" style="color: #a30d11; font-size: 20px;"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                        @endforeach

                    </tbody>
                </table>

            </div><!-- 4  -->
                <br><br>
        
                <!-- New Payment Button -->
                <button type="button" class="btn btn-light btn-new-payment position-absolute bottom-0 end-0 m-4" onclick="window.location='{{ route('newPayment') }}'">
                    NEW PAYMENT
                </button>

        </div><!-- 3  -->
    </div><!-- 2  -->
</div> <!-- 1  -->

<script>
    function confirmDelete(paymentID) {
        if (confirm('Delete the details?')) {
            // If 'YES' button is clicked
            window.location.href = '/ManagePayment/KioskParticipant/viewPayment';
        } else {
            // If 'NO' button is clicked or the user cancels the confirmation
            // Redirect to the list of payments
            window.location.href = '{{ route('viewPayment') }}';
        }
    }
</script>

@endsection
