@extends('layouts.main')

@section('title', 'Guests')

@section('content')
    <h1>Editing {{$guest->name}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('guests.update', $guest->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <lavel>Name: </lavel>
        <input type="text" name="name" placeholder="Name" value="{{$guest->name}}"><br>

        <lavel>Username: </lavel>
        <input type="text" name="username" placeholder="username" value="{{$guest->username}}"><br>

        <lavel>Email: </lavel>
        <input type="email" name="email" placeholder="email" value="{{$guest->email}}"><br>

        <lavel>Role ID: </lavel>
        <input type="text" name="role_id" placeholder="role_id" value="{{$guest->role_id}}"><br>

        <lavel>Phone: </lavel>
        <input type="text" name="phone" placeholder="phone" value="{{$guest->phone}}"><br>

        <lavel>Company: </lavel>
        <input type="text" name="company" placeholder="company" value="{{$guest->company}}"><br>

        <lavel>Job Title: </lavel>
        <input type="text" name="job_title" placeholder="job_title" value="{{$guest->job_title}}"><br>

        <lavel>Notes: </lavel>
        <input type="text" name="notes" placeholder="notes" value="{{$guest->notes}}"><br>

        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
