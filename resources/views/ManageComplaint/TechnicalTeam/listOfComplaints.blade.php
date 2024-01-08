@extends('layouts.technicalTeamMaster')
@section('content')

<div class="container-fluid">
<div class="card">
        <div class="card-body">
            <table class="table table-striped align-middle table-nowrap mb-0">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">I/C Number</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $modal = 1;
                    @endphp
                    @foreach ($data as $q)
                        <tr>
                            <th scope='row'>{{$modal++}}</th>
                            <td>{{$q->name}}</td>
                            <td>{{$q->noKp}}</td>
                            <td style="color:{{$q->status=='Pending' ? 'orange' : ($q->status=='Approved' ? 'green' : 'red')}}"
                                >{{$q->status}}</td>
                            <td >
                                <center>
                                    <a class='btn  btn-animation waves-effect waves-light' href='{{ url("/tech/viewComplaint", ["id" => $q->id]) }}'>
                                        <!-- <i class="ri-eye-line" style="color: green; font-size:20px;"></i> -->
                                        <i class="far fa-eye"></i>
                                    </a>

                                         <a type='button' class='btn  btn-animation waves-effect waves-light' href='{{ url("/tech/editComplaint", ["id" => $q->id]) }}'>
                                            <!-- <i class="ri-edit-line " style="color: black; font-size:20px;"></i> -->
                                            <i class="far fa-pen-to-square"></i>
                                         </a>
                                    @if ($q->status=='Pending')
                                        <button type='button' class='btn  btn-animation waves-effect waves-light' data-bs-toggle='modal' data-bs-target='#delete{{$modal}}'>
                                            <!-- <i class="ri-eraser-fill " style="color: red; font-size:20px;"></i> -->
                                            <i class="fas fa-trash-can text-danger"></i>
                                        </button>
                                    @else
                                    <button type='button' class='btn btn-animation waves-effect waves-light' style="color: grey; border: none; box-shadow: none;" disabled>
                                        <i class="ri-eraser-fill" style="color: red; font-size:20px;"></i>
                                    </button>
                                    @endif
                                </center>
                            </td>
                        </tr>
                        <div id="view{{$modal}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel">View Application</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                    </div>
                                        <div class='modal-body'>
                                            <div class='col-md-12'>
                                                <label for='inputEmail4' class='form-label'><b>Personal Details</b></label>
                                                <input class='form-control' value='{{$q->name}}' readonly>
                                                <br>
                                                <input  class='form-control' value='{{$q->noKp}}' readonly>
                                            </div>
                                            <br>
                                            <div class='col-md-12'>
                                                <label for='inputEmail4' class='form-label'><b>Complaint :</b></label>
                                                <textarea type='text' row='4' class='form-control' value='{{$q->explain}}'  readonly>{{$q->explain}}</textarea>
                                            </div>
                                            @if ($q->answer!=null)
                                                <div class='col-md-12'>
                                                    <label for='inputEmail4' class='form-label'><b>Reason Of Approval/Rejection :</b></label>
                                                    <textarea type='text' row='5' class='form-control' value='{{$q->answer}}'  readonly>{{$q->answer}}</textarea>
                                                </div>
                                            @endif
                                        </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <div id="edit{{$modal}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel">Edit Application</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                    </div>
                                        <form method='post' action='{{ url("/kiosk/updateComplaint") }}'>
                                            @csrf
                                            <div class='modal-body'>
                                                <div class='col-md-12'>
                                                    <label for='inputEmail4' class='form-label'><b>Personal Details</b></label>
                                                    <input type='text' class='form-control' name='nama' placeholder="Fill In Your Name!" value='{{$q->name}}' required>
                                                    <br>
                                                    <input type='number' class='form-control' name='noKp' placeholder="Fill In Your IC Number!" value='{{$q->noKp}}' required>
                                                </div>

                                                <br>
                                                <br>
                                                <div class='col-md-12'>
                                                    <label for='inputEmail4' class='form-label'><b>Fill In Your Complaint!</b></label>
                                                    <textarea type='text' row='4' class='form-control' name='complaint' value='{{$q->explain}}' required>{{$q->explain}}</textarea>
                                                </div>
                                            </div>
                                            <div class='modal-footer'>
                                                <input type='hidden' value='{{$q->id}}' name='id'/>
                                                <!-- <button type='button' class='btn btn-light' data-bs-dismiss='modal'>Tutu</button> -->
                                                <button class='btn btn-primary ' type='submit'>Submit</button>
                                            </div>
                                        </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <div id="delete{{$modal}}" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                    </div>
                                    <div class='modal-body'>
                                        <center>
                                            <h3><b>Delete The Complaint?</b></h3>
                                            <div class="row">
                                                <div class="col">
                                                    <a class='btn btn-danger' href='{{ url("/kiosk/deleteComplaint", ["id" => $q->id]) }}'  type='submit'>Yes</a>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">No</button>
                                                </div>

                                            </div>
                                        </center>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


@endsection