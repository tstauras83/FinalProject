@extends('layouts.main')

@section('title', 'Guests')

@section('content')
    <h1>Editing Guest: {{$guest->name}}</h1>
    <div class="row">
        <form action="{{route('guests.update', $guest->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-4">
                <lavel class="form-label">Name:</lavel>
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$guest->name}}"><br>
            </div>

            <div class="col-4">
                <lavel class="form-label">Username:</lavel>
                <input type="text" class="form-control" name="username" placeholder="username" value="{{$guest->username}}"><br>
            </div>

            <div class="col-4">
                <lavel class="form-label">Email:</lavel>
                <input type="email" class="form-control" name="email" placeholder="email" value="{{$guest->email}}"><br>
            </div>

            <div class="col-4">
                <lavel class="form-label">Role ID:</lavel>
                <input type="text" class="form-control" name="role_id" placeholder="role_id" value="{{$guest->role_id}}"><br>
            </div>

            <div class="col-4">
                <lavel class="form-label">Phone:</lavel>
                <input type="text" class="form-control" name="phone" placeholder="phone" value="{{$guest->phone}}"><br>
            </div>

            <div class="col-4">
                <lavel class="form-label">Notes:</lavel>
                <input type="text" class="form-control" name="notes" placeholder="notes" value="{{$guest->notes}}"><br>
            </div>

            <hr>
            <input type="submit" class="btn-success btn" value="Update">
        </form>
    </div>
@endsection
