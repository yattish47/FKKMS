@extends('layouts.master')

@section('content')

<style>
    .main-section {
        width: 96%;
        height: 100%;
        top: 500px;
        margin-left: 2%;
        height: 100%;
    }

    .main-section .card {
        margin-top: 20px;
        width: 100%;
        height: 500px;
        border-radius: 15px;
        box-shadow: 5px 10px 18px #888888;
    }

    .center-form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .generate-button {
        background-color: #D2D6FB;
        color: #000;
        box-shadow: none;
    }

    .btn-edit {
        background-color: #D2D6FB;
        color: #000;
        box-shadow: none;
    }

    .btn-delete {
        background-color: #D2D6FB;
        color: #000;
        box-shadow: none;
    }

    #addButton {
        display: block;
        margin: 0 auto;
        width: 150px;
        background-color: #D2D6FB;
        color: #000;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        box-shadow: none;
    }

    /* Style the header row background in blue color */
    .table thead th {
        background-color: #D2D6FB; /* Blue color code */
        color: #000; /* White text color */
    }

    /* Center the filtering form row */
    .filter-form-row {
        display: flex;
        justify-content: center;
    }
</style>

<div class="container">
    <div class="main-section">
        <div class="card h-100">
            <div class="container text-center">
                <h1>SALES REPORT</h1>
            </div>

            <!-- Form for filtering by year and month -->
            <form method="get" action="{{ route('reports.filter') }}" class="row filter-form-row">
                @csrf
                <div class="col-md-4 mb-3">
                    <label for="year">Year:</label>
                    <input type="text" class="form-control" name="year" value="{{ request('year') }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="month">Month:</label>
                    <input type="text" class="form-control" name="month" value="{{ request('month') }}">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="submit" class="invisible">Generate Report:</label>
                    <button type="submit" class="btn btn-primary btn-block generate-button">GENERATE REPORT</button>
                </div>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>ReportID</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Total Sales</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $record)
                    <tr>
                        <td>{{ $record->ReportID }}</td>
                        <td>{{ $record->month }} </td>
                        <td>{{ $record->year }}</td>
                        <td>{{ $record->totalPrice }}</td>
                        <td>{{ $record->created_at }}</td>
                        <td>{{ $record->updated_at }}</td>
                        <td>
                            <a href="/ManageReport/KioskParticipant/{{ $record->ReportID }}/edit"
                                class="btn btn-edit btn-warning">UPDATE</a>
                            <a href="/ManageReport/KioskParticipant/{{ $record->ReportID }}/delete"
                                class="btn btn-delete btn-danger"
                                onclick="return confirm('Are you sure you want to delete this record?')">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('reports.store') }}" id="addButton">ADD</a>
        </div>
    </div>
</div>

@endsection
