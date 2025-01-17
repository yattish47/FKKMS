@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/listofkioskapplication.css') }}">

    <div class="container-fluid">
        <div class="card h-100">
            <div class="card-body">
                <h3 class="text-center main-title mt-4">List of Applications</h3>

                <div class="d-flex justify-content-center ">


                    <div class="d-flex justify-content-center w-100 mt-4" style="overflow: hidden">
                        <div class="col-4 input-group w-25" style="margin-left: 170px; ">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="search" id="form1" class="form-control" onkeyup="myFunction()" />
                                <label class="form-label" for="form1">Search</label>
                            </div>
                            <button type="button" class="btn btn-primary" style="background-color: #D2D6FB !important; "
                                data-mdb-ripple-init>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>

                        <div class="col-6 mx-auto">

                        </div>
                        <div class="col-2 mx-auto">
                            <button type="button" class="btn btn-primary text-dark border border-dark newappBtn"
                                data-mdb-ripple-init onclick="window.location='{{ route('newApplication') }}'">New
                                Application</button>
                        </div>
                    </div>


                </div>

                <div class="d-flex justify-content-center">
                    <table class="table align-middle mb-0 bg-white mt-5 table-responsive-sm table-hover">


                        <thead>
                            <tr>
                                <th class="firstcol">No</th>
                                <th>Name</th>
                                <th>IC Number</th>
                                <th> Kiosk Status</th>
                                <th>Application Status</th>
                                <th class="lastcol">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kioskApplications as $index => $application)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">{{ $index + 1 }}</p>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">{{ $application->kpName }}</p>

                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">{{ $application->kpICNumber }}</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">{{ $application->kpICNumber }}</p>
                                    </td>
                                    <td>
                                        @if ($application->kApplicationStatus == 'Pending')
                                            <span class="badge badge-warning rounded-pill d-inline">
                                                {{ $application->kApplicationStatus }}</span>
                                        @elseif ($application->kApplicationStatus == 'Approved')
                                            <span class="badge badge-success rounded-pill d-inline">
                                                {{ $application->kApplicationStatus }}</span>
                                        @elseif ($application->kApplicationStatus == 'Rejected')
                                            <span class="badge badge-danger rounded-pill d-inline">
                                                {{ $application->kApplicationStatus }}</span>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="btn-group shadow-0" role="group" style="margin-left: -20px">
                                            <button type="button" class="btn btn-link" data-mdb-color="dark"
                                                onclick="window.location='{{ route('viewApplication', ['id' => $application->kApplicationID]) }}'"><i
                                                    class="fa-solid fa-eye"
                                                    style="color: #00ff59; font-size: 20px;"></i></button>
                                            {{-- <button type="button" class="btn btn-link" data-mdb-color="dark"><i class="fa-regular fa-pen-to-square" style="color: #624de3; font-size: 20px;"></i></button> --}}
                                            @if ($application->kApplicationStatus == 'Pending')
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                        class="fa-regular fa-trash-can"
                                                        style="color: #a30d11; font-size: 20px;"></i></button>
                                            @elseif ($application->kApplicationStatus == 'Approved' || $application->kApplicationStatus == 'Rejected')
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"
                                                    @disabled(true)><i class="fa-regular fa-trash-can"
                                                        style="color: #a30d11; font-size: 20px;"></i></button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Are You Sure You Want to
                                                    Delete Your Application?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">No</button>
                                                <button type="button" class="btn btn-danger" id="confirmDelete"
                                                    onclick="window.location='{{ route('deleteApplication', ['id' => $application->kApplicationID]) }}'">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>



    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("form1");
            filter = input.value.toUpperCase();
            table = document.getElementsByTagName("table")[0];
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4]; // Change index to match the column you want to search
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
