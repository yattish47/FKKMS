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
                                <input type="search" id="form1" class="form-control" />
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
                                <th>Username</th>
                                <th>User ID</th>
                                <th>Roles</th>
                                <th class="lastcol">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">1</p>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">yatt</p>

                                </td>
                                <td>
                                    <p class="fw-normal mb-1">cb3333</p>
                                </td>
                                <td>

                                    <span class="badge badge-success rounded-pill d-inline">admin</span>
                                </td>

                                <td>
                                    <div class="btn-group shadow-0" role="group" style="margin-left: -20px">
                                        <button type="button" class="btn btn-link" data-mdb-color="dark" onclick="window.location='{{ route('viewApplication') }}'"><i
                                                class="fa-solid fa-eye"
                                                style="color: #00ff59; font-size: 20px;"></i></button>
                                        {{-- <button type="button" class="btn btn-link" data-mdb-color="dark"><i class="fa-regular fa-pen-to-square" style="color: #624de3; font-size: 20px;"></i></button> --}}
                                        <button type="button" class="btn btn-link" data-mdb-color="dark"><i
                                                class="fa-regular fa-trash-can"
                                                style="color: #a30d11; font-size: 20px;"></i></button>

                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
