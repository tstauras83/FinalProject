@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <!-- Main content -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __("You're logged in!") }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">Upcoming Events!!</div>
                    <div class="card-body">
                        @foreach($upcomingEvents as $index => $event)
                            @if($index % 3 == 0)
                                <div class="row mb-3">
                                    @endif
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                                <?php $randomNumber = rand(1, 4); ?>
                                            <img src="/img/events/download{{ $randomNumber }}.png" height="250px"
                                                 alt="{{ $event->name }}"
                                                 class="card-img-top">
                                            <div class="card-body">
                                                <h3>{{ $event->name }}</h3>
                                                <p class="card-text">{{ $event->description }}</p>
                                                <p class="card-text">{{ $event->start_date}}</p>
                                                <a href="{{ route('events.show', $event->id) }}"
                                                   class="btn btn-primary">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    @if(($index + 1) % 3 == 0 || ($index + 1) == count($pastEvents))
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">Past Events</div>
                    <div class="card-body">
                        @foreach($pastEvents as $index => $pevent)
                            @if($index % 3 == 0)
                                <div class="row mb-3">
                                    @endif
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                                <?php $randomNumber = rand(1, 4); ?>
                                            <img src="/img/events/download{{ $randomNumber }}.png" height="250px"
                                                 alt="{{ $pevent->name }}"
                                                 class="card-img-top">
                                            <div class="card-body">
                                                <h3>{{ $pevent->name }}</h3>
                                                <p class="card-text">{{ $pevent->description }}</p>
                                                <p class="card-text">{{ $pevent->start_date}}</p>
                                                <a href="{{ route('events.show', $pevent->id) }}"
                                                   class="btn btn-primary">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    @if(($index + 1) % 3 == 0 || ($index + 1) == count($pastEvents))
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
