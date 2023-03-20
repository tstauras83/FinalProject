@extends('layouts.main')

@section('title', 'Staff Event Assignment')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
                <div class="card-content">
                    <h5>Staff: {{ $staffeventassignment->staff->name }}</h5>
                    <h5>Event: {{ $staffeventassignment->event->name }}</h5>
                    <h5>Start Time: {{ $staffeventassignment->start_time }}</h5>
                    <h5>End Time: {{ $staffeventassignment->end_time }}</h5>
                    <h5>Duration: {{ $staffeventassignment->duration_minutes }}</h5>
                    <h5>Staff Assignment: {{ $staffeventassignment->staff_assignment }}</h5>

                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$staffeventassignment" mainRoute="staffeventassignments"/>
                </div>
            </div>
        </div>
    </div>
@endsection
