@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="selectYear">Select Year:</label>
                <select class="form-control" id="selectYear">
                    @for ($year = date('Y'); $year >= date('Y') - 10; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="selectMonth">Select Month:</label>
                <select class="form-control" id="selectMonth">
                    @for ($month = 1; $month <= 12; $month++)
                        <option value="{{ $month }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="selectWeek">Select Week:</label>
                <select class="form-control" id="selectWeek">
                    @for ($week = 1; $week <= 52; $week++)
                        <option value="{{ $week }}">Week {{ $week }}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
</div>

@endsection


