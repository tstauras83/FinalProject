@extends('layouts.main')

@section('title', 'guesteventattendances')

@section('content')
    <h1>Editing {{$guesteventattendance->event_id}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('guesteventattendances.update', $guesteventattendance->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label>Guest ID</label>
        <input type="text" name="guest_id" placeholder="Guest ID" value="{{$guesteventattendance->guest_id}}"><br>

        <label>Event ID</label>
        <input type="text" name="event_id" placeholder="Event ID" value="{{$guesteventattendance->event_id}}"><br>

        <label>Attended</label>
        <input type="text" name="attended" placeholder="Attended" value="{{$guesteventattendance->attended}}"><br>

        <label>Attendance Code</label>
        <input type="text" name="attendance_code" placeholder="Attendance Code" value="{{$guesteventattendance->attendance_code}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
