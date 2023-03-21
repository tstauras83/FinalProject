@extends('layouts.main')

@section('title', 'guesteventattendances')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Guest Attendance Creation Form</h1>
            <form method="POST" action="{{ route('guesteventattendances.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">

                <div class="col-4">
                    <label>Guest ID</label>
                    <input type="text" class="form-control" name="guest_id" placeholder="Guest ID" value=""><br>
                </div>

                <div class="col-4">
                    <label>Event ID</label>
                    <input type="text" class="form-control" name="event_id" placeholder="Event ID" value=""><br>
                </div>

                <div class="col-4">
                    <label>Attended</label>
                    <input type="text" class="form-control" name="attended" placeholder="Attended" value=""><br>
                </div>

                <div class="col-4">
                    <label>Attendance Code</label>
                    <input type="text" class="form-control" name="attendance_code" placeholder="Attendance Code"
                           value=""><br>
                </div>

                @csrf
                <input type="submit" class="btn-success btn" value="Submit">
            </form>


        </div>
    </div>
@endsection
