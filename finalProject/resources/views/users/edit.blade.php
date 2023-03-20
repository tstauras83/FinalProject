@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <h1>Editing User: {{$user->name}}</h1>
    <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="col-4">
            <label class="form-label">Name: </label>
            <input type="text" class="form-control"  name="name" placeholder="" value="{{$user->name}}">
        </div>

        <div class="col-4">
            <label class="form-label">Email: </label>
            <input type="text" class="form-control"  name="email" placeholder="" value="{{$user->email}}">
        </div>

        <div class="col-4">
            <label class="form-label">Role ID: </label>
            <input type="text" class="form-control"  name="role_id" placeholder=""  value="{{$user->role_id}}">
        </div>

        <div class="col-4">
            <label class="form-label">Phone Number: </label>
            <input type="text" class="form-control"  name="phone_number" placeholder="" value="{{$user->phone_number}}">
        </div>

        <div class="col-4">
            <label class="form-label">Address: </label>
            <input type="text" class="form-control" name="address" placeholder="" value="{{$user->address}}">
        </div>
        <hr>
        <input type="submit" class="btn-success btn" value="Update">
    </form>
@endsection
