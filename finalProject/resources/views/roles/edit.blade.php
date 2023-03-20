@extends('layouts.main')

@section('title', 'Roles')

@section('content')
    <h1>Editing {{$role->name}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('roles.update', $role->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label>Name: </label>
        <input type="text" name="name" placeholder="Name" value="{{$role->name}}"><br>

        <label>Description: </label>
        <input type="text" name="description" placeholder="Description" value="{{$role->description}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
