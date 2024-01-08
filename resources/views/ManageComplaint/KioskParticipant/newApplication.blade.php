@extends('layouts.master')
@section('content')

<form method='post' action='{{ url("/kiosk/addComplaint") }}'>
        @csrf
        <div class='modal-body'>
            <div class='col-md-12'>
                <label for='inputEmail4' class='form-label'><b>Personal Details</b></label>
                <input type='text' class='form-control' name='nama' placeholder="Fill In Your Name!" required>
                <br>
                <input type='number' class='form-control' name='noKp' placeholder="Fill In Your IC Number!" required>
            </div>

            <br>
            <br>
            <div class='col-md-12'>
                <label for='inputEmail4' class='form-label'><b>Fill In Your Complaint!</b></label>
                <textarea type='text' row='4' class='form-control' name='complaint'  required></textarea>
            </div>
        </div>
        <br>
        <center>
            <button class='btn btn-primary ' type='submit'>Submit</button>
            <a type="button" class="btn btn-primary waves-effect waves-light" href='{{ url("/kiosk/complaint") }}'>Back</a>
        </center>
    </form>



@endsection