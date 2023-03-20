@extends('layouts.main')

@section('title', 'staffeventassignments')

@section('content')
    <h1>Editing {{$staffeventassignment->staff_id}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{ route('staffeventassignments.update',  $staffeventassignment->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
        @csrf
        <label>Staff ID</label>
        <input type="text" name="staff_id" placeholder="staff_id" value="{{$staffeventassignment->staff_id}}"><br>

        <label>Event ID</label>
        <input type="text" name="event_id" placeholder="event_id" value="{{$staffeventassignment->event_id}}"><br>

        <label>Start Time</label>
        <input type="datetime-local" name="start_time" placeholder="start_time" value="{{$staffeventassignment->start_time}}"><br>

        <label>End Time</label>
        <input type="datetime-local" name="end_time" placeholder="end_time" value="{{$staffeventassignment->end_time}}"><br>

        <label>Duration</label>
        <input type="time" name="duration_minutes" placeholder="duration_minutes" value="{{$staffeventassignment->duration_minutes}}"><br>

        <label>Staff Assigned</label>
        <input type="text" name="staff_assignment" placeholder="staff_assignment" value="{{$staffeventassignment->staff_assignment}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
