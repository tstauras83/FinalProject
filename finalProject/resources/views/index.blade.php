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
        <div class="row" style="color:black">
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
                <h2>Photo Gallery</h2> <br>
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
                <p>At Event Management System, we are passionate about creating unforgettable events that leave a lasting impression on your guests. Our team of experienced event planners brings a wealth of creativity and expertise to every project we undertake, and we are committed to delivering exceptional service and attention to detail from start to finish.</p>
                <p>Our team consists of professionals from a diverse range of backgrounds, including event planning, marketing, and logistics. We collaborate closely with our clients to understand their unique needs and goals, and we work tirelessly to create a personalized event experience that exceeds expectations.</p>
                <p>Whether you're planning a corporate conference, a charity fundraiser, or a private celebration, we have the expertise and resources to bring your plans to life. Contact us today to learn more about our services and how we can help make your event a success.</p>
            </div>

            <div class="col-md-6">
                <h3>What We Do</h3>
                <p>At Event Management System, we offer a comprehensive range of event planning services to meet the unique needs and goals of each client. From development to execution and post-event analysis, we work closely with you every step of the way to ensure a successful and memorable event.</p>
                <p>Our services include:</p>
                <ul>
                    <li>Venue Selection and Management: We help you find the perfect venue for your event and manage all aspects of venue logistics, including catering, audio-visual equipment, and staffing.</li>
                    <li>Event Marketing and Promotion: We develop and execute a comprehensive marketing and promotion strategy to ensure maximum attendance and engagement at your event.</li>
                    <li>On-Site Event Management: Our team is on-site during your event to ensure smooth execution and handle any last-minute issues that may arise.</li>
                    <li>Post-Event Analysis: We provide comprehensive post-event analysis and feedback to help you measure the success of your event and identify areas for improvement.</li>
                </ul>
                <p>Whether you're planning a small corporate meeting, a large-scale conference, or a private celebration, we have the expertise and resources to deliver an exceptional event experience. Contact us today to learn more about our services and how we can help make your event a success.</p>
            </div>

        </div>
        <script src="/js/interactive.js"></script>
@endsection

