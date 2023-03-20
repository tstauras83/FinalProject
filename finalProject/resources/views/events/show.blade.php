@extends('layouts.main')

@section('title', 'Events')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
                <div class="card-content">
                    <h5>ID: {{$event->id}}</h5>
                    <h5>Name: {{$event->name}}</h5>
                    <h5>Description: {{$event->description}}</h5>
                    <h5>Start: {{$event->start_date}}</h5>
                    <h5>End: {{$event->end_date}}</h5>
                    <h5>Location: {{$event->location}}</h5>
                    <h5>Address: {{$event->address}}</h5>
                    <h5>City: {{$event->city}}</h5>
                    <h5>State: {{$event->state}}</h5>
                    <h5>Country: {{$event->country}}</h5>
                    <h5>Zipcode: {{$event->zipcode}}</h5>
                    <h5>Created By: {{$event->created_by}}</h5>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$event" mainRoute="events"/>
                </div>
            </div>
        </div>
    </div>
@endsection
