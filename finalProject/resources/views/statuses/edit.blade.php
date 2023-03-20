@extends('layouts.main')

@section('title', 'statuses')

@section('content')
    <h1>Editing {{$status->status}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('statuses.update', $status->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="text" name="status" placeholder="Name" value="{{$status->status}}"><br>
        <input type="text" name="description" placeholder="Email" value="{{$status->description}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
