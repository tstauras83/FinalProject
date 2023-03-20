@extends('layouts.main')

@section('title', 'Staff Event Assignment')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Staff Event Assignment</h1>
                        <x-forms.buttons.create mainRoute="staffeventassignments" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Staff Name</th>
                    <th>Event Name</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Duration Minutes</th>
                    <th>Staff Assignment</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($staffeventassignments as $staffeventassignment)
                    <tr>
                        <td>{{$staffeventassignment->id}}</td>
                        <td>{{$staffeventassignment->staff->name}}</td>
                        <td>{{$staffeventassignment->event->name}}</td>
                        <td>{{$staffeventassignment->start_time}}</td>
                        <td>{{$staffeventassignment->end_time}}</td>
                        <td>{{$staffeventassignment->duration_minutes}}</td>
                        <td>{{$staffeventassignment->staff_assignment}}</td>
                        <td>
                            <x-forms.buttons.action :model="$staffeventassignment" mainRoute="staffeventassignments"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
