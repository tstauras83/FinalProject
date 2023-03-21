@extends('layouts.main')

@section('title', 'guesteventattendances')

@section('content')
    <h1>Editing GuestE.A: {{$guesteventattendance->event->name}}</h1>
    <form action="{{route('guesteventattendances.update', $guesteventattendance->id)}}" method="post"
          enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="col-4">
            <label>Guest ID</label>
            <input type="text" class="form-control" name="guest_id" placeholder="Guest ID"
                   value="{{$guesteventattendance->guest_id}}"><br>
        </div>

        <div class="col-4">
            <label>Event ID</label>
            <input type="text" class="form-control" name="event_id" placeholder="Event ID"
                   value="{{$guesteventattendance->event_id}}"><br>
        </div>

        <div class="col-4">
            <label>Attended</label>
            <input type="text" class="form-control" name="attended" placeholder="Attended"
                   value="{{$guesteventattendance->attended}}"><br>
        </div>

        <div class="col-4">
            <label>Attendance Code</label>
            <input type="text" class="form-control" name="attendance_code" placeholder="Attendance Code"
                   value="{{$guesteventattendance->attendance_code}}"><br>
        </div>
        <hr>
        <input type="submit" class="btn-success btn" value="Update">
    </form>
@endsection
