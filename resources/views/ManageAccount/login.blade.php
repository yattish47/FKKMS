@extends('ManageAccount.layouts.master')
@section('content')

<div class="container-fluid w-100">
    <div class="d-flex justify-content-center">
        <img src="{{url('assets/fkkmsLogo.png')}}" alt="fkkms_logo" class="Logo">
        <img src="{{url('assets/petakomLogo.png')}}" alt="petakom_logo" class="Logo petakomLogo">
        <img src="{{url('assets/logoUmp.png')}}" alt="ump_logo" class="Logo umpLogo">
    </div>

    <div class="d-flex justify-content-center">
        <div class="card ">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
              </p>
              <button type="button" class="btn btn-primary" data-mdb-ripple-init="">Button</button>
            </div>
          </div>
    </div>
  
</div>
@endsection