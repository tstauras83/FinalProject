@extends('layouts.main')

@section('title', 'Events')

@section('content')
    <h1>Editing {{$event->name}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('events.update', $event->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label>Name: </label>
        <input type="text" name="name" placeholder="Name" value="{{$event->name}}"><br>

        <label>Description: </label>
        <input type="text" name="description" placeholder="Description" value="{{$event->description}}"><br>

        <label>Start Date: </label>
        <input type="date" name="start_date" placeholder="Start Date" value="{{$event->start_date}}"><br>

        <label>End Date: </label>
        <input type="date" name="end_date" placeholder="End Date" value="{{$event->end_date}}"><br>

        <label>Location: </label>
        <input type="text" name="location" placeholder="Location" value="{{$event->location}}"><br>

        <label>Address: </label>
        <input type="text" name="address" placeholder="Address" value="{{$event->address}}"><br>

        <label>City: </label>
        <input type="text" name="city" placeholder="City" value="{{$event->city}}"><br>

        <label>State: </label>
        <input type="text" name="state" placeholder="State" value="{{$event->state}}"><br>

        <label>Country: </label>
        <input type="text" name="country" placeholder="Country" value="{{$event->country}}"><br>

        <label>Zipcode: </label>
        <input type="text" name="zipcode" placeholder="Zipcode" value="{{$event->zipcode}}"><br>

        <label>Created By: </label>
        <input type="text" name="created_by" placeholder="Created By" value="{{$event->created_by}}"><br>


        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
