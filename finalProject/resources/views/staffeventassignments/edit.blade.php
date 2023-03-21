@extends('layouts.main')

@section('title', 'Staff Event Assignment')

@section('content')
    <h1>Editing Staff Event Assignment: {{$staffeventassignment->staff_id}}</h1>
    <form action="{{ route('staffeventassignments.update',  $staffeventassignment->id) }}" method="POST"
          enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="col-4">
            <label>Staff ID</label>
            <input type="text" class="form-control" name="staff_id" placeholder="staff_id"
                   value="{{$staffeventassignment->staff_id}}"><br>
        </div>

        <div class="col-4">
            <label>Event ID</label>
            <input type="text" class="form-control" name="event_id" placeholder="event_id"
                   value="{{$staffeventassignment->event_id}}"><br>
        </div>

        <div class="col-4">
            <label>Start Time</label>
            <input type="datetime-local" class="form-control" name="start_time" placeholder="start_time"
                   value="{{$staffeventassignment->start_time}}"><br>
        </div>

        <div class="col-4">
            <label>End Time</label>
            <input type="datetime-local" class="form-control" name="end_time" placeholder="end_time"
                   value="{{$staffeventassignment->end_time}}"><br>
        </div>

        <div class="col-4">
            <label>Duration</label>
            <input type="time" class="form-control" name="duration_minutes" placeholder="duration_minutes"
                   value="{{$staffeventassignment->duration_minutes}}"><br>
        </div>

        <div class="col-4">
            <label>Staff Assigned</label>
            <input type="text" class="form-control" name="staff_assignment" placeholder="staff_assignment"
                   value="{{$staffeventassignment->staff_assignment}}"><br>
        </div>

        <hr>
        <input type="submit" class="btn btn-success" value="Update">
    </form>
@endsection
