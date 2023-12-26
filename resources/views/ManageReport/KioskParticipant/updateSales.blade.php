@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="selectYear">Year:</label>
                <select class="form-control" id="selectYear" name="year">
                    @for ($y = date('Y'); $y >= date('Y') - 10; $y--)
                        <option value="{{ $y }}" {{ $salesRecord->year == $y ? 'selected' : '' }}>{{ $y }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="selectMonth">Month:</label>
                <select class="form-control" id="selectMonth" name="month">
                    @for ($m = 1; $m <= 12; $m++)
                        <option value="{{ $m }}" {{ $salesRecord->month == $m ? 'selected' : '' }}>
                            {{ date('F', mktime(0, 0, 0, $m, 1)) }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="selectWeek">Week:</label>
                <select class="form-control" id="selectWeek" name="week">
                    @for ($w = 1; $w <= 5; $w++)
                        <option value="{{ $w }}" {{ $salesRecord->week == $w ? 'selected' : '' }}>
                            Week {{ $w }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="col-md-12" id="salesFormContainer">
            <form action="{{ route('sales.update', ['id' => $salesRecord->id]) }}" method="post">
                @csrf
                @method('PUT')
                <label for="monday">Monday:</label>
                <input type="text" name="monday" class="form-control" value="{{ $salesRecord->monday }}" required>
                <label for="tuesday">Tuesday:</label>
                <input type="text" name="tuesday" class="form-control" value="{{ $salesRecord->tuesday }}" required>
                <label for="wednesday">Wednesday:</label>
                <input type="text" name="wednesday" class="form-control" value="{{ $salesRecord->wednesday }}" required>
                <label for="thursday">Thursday:</label>
                <input type="text" name="thursday" class="form-control" value="{{ $salesRecord->thursday }}" required>
                <label for="friday">Friday:</label>
                <input type="text" name="friday" class="form-control" value="{{ $salesRecord->friday }}" required>
                <label for="saturday">Saturday:</label>
                <input type="text" name="saturday" class="form-control" value="{{ $salesRecord->saturday }}" required>
                <label for="sunday">Sunday:</label>
                <input type="text" name="sunday" class="form-control" value="{{ $salesRecord->sunday }}" required>

                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
</div>

@endsection
