@extends('layouts.main')

@section('title', 'Staff Event Assignment')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>staff event assignment Creation Form</h1>
            <form method="POST" action="{{ route('staffeventassignments.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">

                <div class="col-4">
                    <label>Staff ID</label>
                    <input type="text" class="form-control" name="staff_id" placeholder="staff_id" value=""><br>
                </div>

                <div class="col-4">
                    <label>Event ID</label>
                    <input type="text" class="form-control" name="event_id" placeholder="event_id" value=""><br>
                </div>

                <div class="col-4">
                    <label>Start Time</label>
                    <input type="datetime-local" class="form-control" name="start_time" placeholder="start_time"
                           value=""><br>
                </div>

                <div class="col-4">
                    <label>End Time</label>
                    <input type="datetime-local" class="form-control" name="end_time" placeholder="end_time"
                           value=""><br>
                </div>

                <div class="col-4">
                    <label>Duration</label>
                    <input type="time" class="form-control" name="duration_minutes" placeholder="duration_minutes"
                           value="">
                </div>


                <div class="col-4">
                    <label>Staff Assigned</label>
                    <input type="text" class="form-control" name="staff_assignment" placeholder="staff_assignment"
                           value=""><br>
                </div>


                @csrf
                <input type="submit" class="btn btn-success" value="Submit">
            </form>


        </div>
    </div>
@endsection
