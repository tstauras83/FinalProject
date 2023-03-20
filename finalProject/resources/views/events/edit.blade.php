@extends('layouts.main')

@section('title', 'Events')

@section('content')
    <h1>Editing Event: {{$event->name}}</h1>
    <div class="row">
        <form action="{{route('events.update', $event->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="col-4">
                <label class="form-label">Name: </label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$event->name}}"><br>
            </div>


            <div class="col-4">
                <label class="form-label">Description: </label>
                <input type="text" class="form-control" name="description" placeholder="Description" value="{{$event->description}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">Start Date: </label>
                <input type="date" class="form-control" name="start_date" placeholder="Start Date" value="{{$event->start_date}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">End Date: </label>
                <input type="date" class="form-control" name="end_date" placeholder="End Date" value="{{$event->end_date}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">Location: </label>
                <input type="text" class="form-control" name="location" placeholder="Location" value="{{$event->location}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">Address: </label>
                <input type="text" class="form-control" name="address" placeholder="Address" value="{{$event->address}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">City: </label>
                <input type="text" class="form-control" name="city" placeholder="City" value="{{$event->city}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">State: </label>
                <input type="text" class="form-control" name="state" placeholder="State" value="{{$event->state}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">Country: </label>
                <input type="text" class="form-control" name="country" placeholder="Country" value="{{$event->country}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">Zipcode: </label>
                <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" value="{{$event->zipcode}}"><br>
            </div>

            <div class="col-4">
                <label class="form-label">Created By: </label>
                <input type="text" class="form-control" name="created_by" placeholder="Created By" value="{{$event->created_by}}"><br>
            </div>

            <hr>
            <input type="submit" class="btn btn-success" value="Update">
        </form>
    </div>
@endsection
