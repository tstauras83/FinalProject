@extends('layouts.main')

@section('title', 'Roles')

@section('content')
    <h1>Editing Role: {{$role->name}}</h1>
    <form action="{{route('roles.update', $role->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="col-4">
            <label class="form-label">Name: </label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$role->name}}"><br>
        </div>

        <div class="col-4">
            <label class="form-label">Description: </label>
            <input type="text" class="form-control" name="description" placeholder="Description"
                   value="{{$role->description}}"><br>
        </div>
        <hr>
        <input type="submit" class="btn btn-success" value="Update">
    </form>
@endsection
