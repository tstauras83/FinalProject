@extends('layouts.main')

@section('title', 'staffeventassignments')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>staff event assignment Create</h1>
            <form method="POST" action="{{ route('staffeventassignments.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                <label>Staff ID</label>
                <input type="text" name="staff_id" placeholder="staff_id" value=""><br>

                <label>Event ID</label>
                <input type="text" name="event_id" placeholder="event_id" value=""><br>

                <label>Start Time</label>
                <input type="datetime-local" name="start_time" placeholder="start_time" value=""><br>

                <label>End Time</label>
                <input type="datetime-local" name="end_time" placeholder="end_time" value=""><br>

                <label>Duration</label>
                <input type="time" name="duration_minutes" placeholder="duration_minutes" value=""><br>

                <label>Staff Assigned</label>
                <input type="text" name="staff_assignment" placeholder="staff_assignment" value=""><br>


                @csrf
                    <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
