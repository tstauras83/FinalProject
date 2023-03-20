@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <h1>Editing {{$user->name}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$user->name}}"><br>
        <input type="text" name="email" placeholder="Email" value="{{$user->email}}"><br>
        <input type="text" name="role_id" placeholder="Role ID" value="{{$user->role_id}}"><br>
        <input type="text" name="phone_number" placeholder="Phone Number" value="{{$user->phone_number}}"><br>
        <input type="text" name="address" placeholder="Address" value="{{$user->address}}"><br>
        <input type="text" name="profile_picture" placeholder="PFP" value="{{$user->profile_picture}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
