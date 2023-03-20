@extends('layouts.main')

@section('title', 'staff_ea')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $staffeventassignment->staff_id }}</span>
                </div>
                <div class="card-content">
                    <p>Staff ID: {{ $staffeventassignment->staff_id }}</p>
                    <p>Event ID: {{ $staffeventassignment->event_id }}</p>
                    <p>Start Time: {{ $staffeventassignment->start_time }}</p>
                    <p>End Time: {{ $staffeventassignment->end_time }}</p>
                    <p>Duration: {{ $staffeventassignment->duration_minutes }}</p>
                    <p>Staff Assignment: {{ $staffeventassignment->staff_assignment }}</p>

                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$staffeventassignment" mainRoute="staffeventassignments"/>
                </div>
            </div>
        </div>
    </div>
@endsection
