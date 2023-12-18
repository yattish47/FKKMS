@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/listofkioskapplication.css') }}">

    <div class="container-fluid">
        <h3 class="text-center main-title">List of Applications</h3>

        <div class="d-flex justify-content-center ">


            <div class="d-flex justify-content-center w-100 mt-4">
                <div class="col-4 input-group w-25" style="margin-left: 120px">
                    <div class="form-outline" data-mdb-input-init>
                        <input type="search" id="form1" class="form-control" />
                        <label class="form-label" for="form1">Search</label>
                    </div>
                    <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                <div class="col-6 mx-auto">

                </div>
                <div class="col-2 mx-auto">
                    <button type="button" class="btn btn-primary" data-mdb-ripple-init>Button</button>
                </div>
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
                  <td> <p class="fw-normal mb-1"></p></td>
                  <td>
                    
                  <span class="badge badge-success rounded-pill d-inline"></span>
                  </td>
                 
                  <td>
                    <div class="btn-group shadow-0" role="group">
                      <button type="button" class="btn btn-link" data-mdb-color="dark"><i class="fa-solid fa-eye" style="color: #00ff59; font-size: 20px;"></i></button>
                      <button type="button" class="btn btn-link" data-mdb-color="dark"><i class="fa-regular fa-pen-to-square" style="color: #624de3; font-size: 20px;"></i></button>
                      <button type="button" class="btn btn-link" data-mdb-color="dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop" <i class="fa-regular fa-trash-can" style="color: #a30d11; font-size: 20px;"></i></button>



                      <!-- Modal -->
                    
                    </div>
                  </td>
                </tr>
              
                
              </tbody>
            </table>
          </div>
    </div>
@endsection
