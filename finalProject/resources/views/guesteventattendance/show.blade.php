@extends('layouts.main')

@section('title', 'guesteventattendances')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
                <div class="card-content">
                    <h5>Guest ID: {{ $guesteventattendance->guest_id }}</h5>
                    <h5>Event ID: {{ $guesteventattendance->event_id }}</h5>
                    <h5>Attended: {{ $guesteventattendance->attended }}</h5>
                    <h5>Attendance Code: {{ $guesteventattendance->attendance_code }}</h5>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$guesteventattendance" mainRoute="guesteventattendances"/>
                </div>
            </div>
        </div>
    </div>
@endsection
