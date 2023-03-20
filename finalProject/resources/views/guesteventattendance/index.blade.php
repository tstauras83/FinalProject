@extends('layouts.main')

@section('title', 'Guest Event Attendance')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Guest Event Attendance</h1>
                        <x-forms.buttons.create mainRoute="guesteventattendances" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Guest ID</th>
                    <th>Event ID</th>
                    <th>Attended?</th>
                    <th>Attendance Code</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($guesteventattendances as $guesteventattendance)
                    <tr>
                        <td>{{$guesteventattendance->id}}</td>
                        <td>{{$guesteventattendance->guest_id}}</td>
                        <td>{{$guesteventattendance->event_id}}</td>
                        <td>{{$guesteventattendance->attended}}</td>
                        <td>{{$guesteventattendance->attendance_code}}</td>
                        <td>
                            <x-forms.buttons.action :model="$guesteventattendance" mainRoute="guesteventattendances"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
