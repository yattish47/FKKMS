@extends('layouts.pupukAdminMaster')
@section('content')
<style>
.main-section{
    width: 96%;
    height: 100%;
    top: 500px;
    margin-left: 2%;
    height: 100%;
  
  }
  .main-section .card{
    margin-top: 20px;
    width: 100%;
    height: 500px;
    border-radius: 15px;
    box-shadow: 5px 10px 18px #888888;
  }

    </style>
<div class="container-fluid p-0">
<div class="main-section">

            <div class="card h-100">
<div class="container text-center">
    <h1>FKKMS SALES REPORT</h1>

    <!-- Form for filtering by year and month -->
    <form method="get" action="{{ route('reports.filterPAdmin') }}" class="row">
        @csrf
        <div class="col-md-4 mb-3">
            <label for="year">Year:</label>
            <input type="text" class="form-control" name="year" value="{{ request('year') }}">
        </div>
        <div class="col-md-4 mb-3">
            <label for="month">Month:</label>
            <input type="text" class="form-control" name="month" value="{{ request('month') }}">
        </div>
        <div class="col-md-4 mb-3">
            <label for="submit" class="invisible">Generate Report:</label>
            <button type="submit" class="btn btn-primary btn-block">GENERATE REPORT</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>ReportID</th>
                <th>Month</th>
                <th>Year</th>
                <!-- Add other headers for your attributes -->
                <th>Total Sales</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $record)
            <tr>
                <td>{{ $record->ReportID }}</td>
                <td>{{ $record->month }} </td>
                <td>{{ $record->year }}</td> <!-- Display Month and Year together -->
                <!-- Add other cells for your attributes -->
                <td>{{ $record->totalPrice }}</td>
                <td>{{ $record->created_at }}</td>
                <td>{{ $record->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</div>
</div>
</div>
@endsection