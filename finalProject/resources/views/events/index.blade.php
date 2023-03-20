@extends('layouts.main')

@section('title', 'Events')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Events</h1>
                        <x-forms.buttons.create mainRoute="events" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Location</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Zipcode</th>
                    <th>Created By</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{$event->id}}</td>
                        <td>{{$event->name}}</td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->start_date}}</td>
                        <td>{{$event->end_date}}</td>
                        <td>{{$event->location}}</td>
                        <td>{{$event->address}}</td>
                        <td>{{$event->city}}</td>
                        <td>{{$event->state}}</td>
                        <td>{{$event->country}}</td>
                        <td>{{$event->zipcode}}</td>
                        <td>{{$event->created_by}}</td>

                        <td>
                            <x-forms.buttons.action :model="$event" mainRoute="events"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
