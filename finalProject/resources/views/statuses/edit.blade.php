@extends('layouts.main')

@section('title', 'statuses')

@section('content')
    <h1>Editing status: {{$status->status}}</h1>
    <form action="{{route('statuses.update', $status->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="col-4">
            <label>Status: </label>
            <input type="text" class="form-control" name="status" placeholder="Name" value="{{$status->status}}"><br>
        </div>

        <div class="col-4">
            <label>Description: </label>
            <input type="text" class="form-control" name="description" placeholder="Email" value="{{$status->description}}"><br>
        </div>

        <hr>
        <input type="submit" class="btn btn-success" value="Update">
    </form>
@endsection
