@extends('layouts.master')

@section('content')

<div class="container">
    <h1>Sales Reports</h1>

    <!-- Form for filtering by year and month -->
    <form method="get" action="{{ route('reports.filter') }}" class="row">
        @csrf
        <div class="col-md-4 mb-3"> <!-- Adjusted column width to col-md-4 for medium-sized screens -->
            <label for="year">Year:</label>
            <input type="text" class="form-control" name="year" value="{{ request('year') }}">
        </div>
        <div class="col-md-4 mb-3"> <!-- Adjusted column width to col-md-4 for medium-sized screens -->
            <label for="month">Month:</label>
            <input type="text" class="form-control" name="month" value="{{ request('month') }}">
        </div>
        <div class="col-md-4 mb-3"> <!-- Adjusted column width to col-md-4 for medium-sized screens -->
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
                <th>Total Price</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th> <!-- Add a new column for actions -->
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
                <td>


                    <!-- Add button for editing -->
                    <a href="/ManageReport/KioskParticipant/{{ $record->ReportID }}/edit" class="btn btn-warning">EDIT</a>
                    <!-- Add button for deleting-->
                    <a href="/ManageReport/KioskParticipant/{{ $record->ReportID }}/delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">DELETE</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <style>
        /* Add custom styles for the "ADD" button */
        #addButton {
            display: block;
            margin: 0 auto;
            width: 150px; /* Adjust the width as needed */
            background-color: #3498db; /* Blue color */
            color: #fff; /* White text color */
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
    <a href="{{ route('reports.store') }}" id="addButton">ADD</a>

</div>

@endsection