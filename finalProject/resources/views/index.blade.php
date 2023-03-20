@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Welcome to the Event Management System!</h1>
            <p class="lead">Here you can manage all your events, from creating and editing them to tracking registrations and attendance.</p>
        </div>
    </div>


    <hr>

    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Upcoming Events</h2>
        </div>
    </div>

    <div class="row">
        @foreach($upcomingEvents as $event)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $event->image_url }}" alt="{{ $event->name }}" class="card-img-top">
                    <div class="card-body">
                        <h3>{{ $event->name }}</h3>
                        <p class="card-text">{{ $event->description }}</p>
                        <p class="card-text">{{ $event->start_date}}</p>
                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    <hr>

    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Photo Gallery</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <img src="https://via.placeholder.com/150" alt="Event photo" class="img-thumbnail">
        </div>
        <div class="col-md-3">
            <img src="https://via.placeholder.com/150" alt="Event photo" class="img-thumbnail">
        </div>
        <div class="col-md-3">
            <img src="https://via.placeholder.com/150" alt="Event photo" class="img-thumbnail">
        </div>
        <div class="col-md-3">
            <img src="https://via.placeholder.com/150" alt="Event photo" class="img-thumbnail">
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12 text-center">
            <h2>About Us</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Who We Are</h3>
            <p>We are a team of experienced event planners dedicated to making your events unforgettable.</p>
        </div>
        <div class="col-md-6">
            <h3>What We Do</h3>
            <p>We offer a full range of event planning services, from concept development and design to execution and post-event analysis.</p>
        </div>
    </div>

@endsection

{{-- Footer goes here --}}
