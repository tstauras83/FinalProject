@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users Create</h1>
            <form method="POST" action="{{ route('guesteventattendances.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                <label>Guest ID</label>
                <input type="text" name="guest_id" placeholder="Guest ID" value=""><br>

                <label>Event ID</label>
                <input type="text" name="event_id" placeholder="Event ID" value=""><br>

                <label>Attended</label>
                <input type="text" name="attended" placeholder="Attended" value=""><br>

                <label>Attendance Code</label>
                <input type="text" name="attendance_code" placeholder="Attendance Code" value=""><br>

                    @csrf
                    <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
