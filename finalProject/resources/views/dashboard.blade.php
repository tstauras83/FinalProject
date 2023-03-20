@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </div>

            <!-- Main content -->
            <div class="col-md-10">
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
                        <p>No upcoming events.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
