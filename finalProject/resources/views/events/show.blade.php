@extends('layouts.main')

@section('title', 'Events')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $event->name }}</span>
                </div>
                <div class="card-content">
                    <p>ID: {{$event->id}}</p>
                    <p>Name: {{$event->name}}</p>
                    <p>Description: {{$event->description}}</p>
                    <p>Start: {{$event->start_date}}</p>
                    <p>End: {{$event->end_date}}</p>
                    <p>Location: {{$event->location}}</p>
                    <p>Address: {{$event->address}}</p>
                    <p>City: {{$event->city}}</p>
                    <p>State: {{$event->state}}</p>
                    <p>Country: {{$event->country}}</p>
                    <p>Zipcode: {{$event->zipcode}}</p>
                    <p>Created By: {{$event->created_by}}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$event" mainRoute="events"/>
                </div>
            </div>
        </div>
    </div>
@endsection
