@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Welcome to the Event Management System!</h1>
            <p class="lead">Here you can manage all your events, from creating and editing them to tracking
                registrations and attendance.</p>
        </div>
    </div>


    <hr>

    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Upcoming Events</h2>
        </div>
    </div>

    <div class="row">
        <div class="row">
            @foreach($upcomingEvents as $event)
                <div class="col-md-4">
                    <div class="flip">
                        <div class="card mb-4 shadow-sm">
                            <div class="face front">
                                <div class="inner">
                                        <?php $randomNumber = rand(1, 4); ?>
                                    <img src="/img/events/download{{ $randomNumber }}.png" height="250px"
                                         alt="{{ $event->name }}" class="card-img-top">
                                </div>
                            </div>
                            <div class="face back">
                                <div class="inner text-center">
                                    <h3>{{ $event->name }}</h3>
                                    <p class="card-text">{{ $event->description }}</p>
                                    <p class="card-text">{{ $event->start_date}}</p>
                                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">View
                                        Details</a>
                                </div>
                            </div>
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
            <div class="carousel-container">
                <div class="carousel d-flex">
                    @foreach (File::files(public_path('img/events')) as $image)
                        <img src="{{ asset('img/events/' . $image->getFilename()) }}" alt="{{ $image->getFilename() }}"
                             class="flex-grow-1">
                    @endforeach
                </div>
                <button class="carousel-prev btn btn-outline-secondary">&lt;</button>
                <button class="carousel-next btn btn-outline-secondary">&gt;</button>
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
                <p>We offer a full range of event planning services, from concept development and design to execution
                    and post-event analysis.</p>
            </div>
        </div>

        <script src="/js/interactive.js"></script>

@endsection

{{-- Footer goes here --}}
