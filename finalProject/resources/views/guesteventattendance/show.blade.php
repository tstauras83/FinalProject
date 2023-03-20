@extends('layouts.main')

@section('title', 'guesteventattendances')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $guesteventattendance->event_id }}</span>
                </div>
                <div class="card-content">
                    <p>Guest ID: {{ $guesteventattendance->guest_id }}</p>
                    <p>Event ID: {{ $guesteventattendance->event_id }}</p>
                    <p>Attended: {{ $guesteventattendance->attended }}</p>
                    <p>Attendance Code: {{ $guesteventattendance->attendance_code }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$guesteventattendance" mainRoute="guesteventattendances"/>
                </div>
            </div>
        </div>
    </div>
@endsection
