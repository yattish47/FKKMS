@extends('layouts.pupukAdminMaster')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/ManageKiosk/PUPUK/listOfApplicationsAndKiosk.css') }}">

    
        <div class="container-fluid p-0">
            <div class="main-section">

                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center">Current Active Kiosk</h5>

                        <div class="input-group d-flex w-25">
                            <div class="form-outline d-flex">
                                <input type="search" id="form1" class="form-control rounded"
                                    style="border-radius: 25px;" />
                                <label class="form-label" for="form1">Search</label>
                                <button type="button" class="btn"
                                    style="background-color:rgba(44, 88, 100, 1); color: white;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                        </div>
                        <div>
                            <table class="table align-middle mb-0 bg-white mt-4 table-responsive-sm table-hover">


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
                                                    <p class="fw-bold mb-1"></p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1"></p>

                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1"></p>
                                        </td>
                                        <td>

                                            <span class="badge badge-success rounded-pill d-inline">d</span>
                                        </td>

                                        <td>
                                            <div class="btn-group shadow-0" role="group">
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"><i
                                                        class="fa-solid fa-eye"
                                                        style="color: #00ff59; font-size: 20px;"></i></button>
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"><i
                                                        class="fa-regular fa-pen-to-square"
                                                        style="color: #624de3; font-size: 20px;"></i></button>
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                        class="fa-regular fa-trash-can"
                                                        style="color: #a30d11; font-size: 20px;"></i></button>



                                                <!-- Modal -->

                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                <div class="mt-5">
                        <h5 class="card-title fw-bold text-center">Kiosk Participant Application List</h5>

                        <div class="input-group d-flex w-25">
                            <div class="form-outline d-flex">
                                <input type="search" id="form1" class="form-control rounded"
                                    style="border-radius: 25px;" />
                                <label class="form-label" for="form1">Search</label>
                                <button type="button" class="btn"
                                    style="background-color:rgba(44, 88, 100, 1); color: white;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                        </div>

                        <div>
                            <table class="table align-middle mb-0 bg-white mt-4 table-responsive-sm table-hover">


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
                                                    <p class="fw-bold mb-1"></p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1"></p>

                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1"></p>
                                        </td>
                                        <td>

                                            <span class="badge badge-success rounded-pill d-inline">d</span>
                                        </td>

                                        <td>
                                            <div class="btn-group shadow-0" role="group">
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"><i
                                                        class="fa-solid fa-eye"
                                                        style="color: #00ff59; font-size: 20px;"></i></button>
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"><i
                                                        class="fa-regular fa-pen-to-square"
                                                        style="color: #624de3; font-size: 20px;"></i></button>
                                                <button type="button" class="btn btn-link" data-mdb-color="dark"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                                        class="fa-regular fa-trash-can"
                                                        style="color: #a30d11; font-size: 20px;"></i></button>



                                                <!-- Modal -->

                                            </div>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>

                    </div>
                </div>
            </div>



        </div>



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Are You Sure You Want to Delete This User?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Yes</button>
                </div>
            </div>
        </div>
    </div>

  
@endsection
