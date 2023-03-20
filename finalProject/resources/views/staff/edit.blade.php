@extends('layouts.main')

@section('title', 'Staff')

@section('content')
    <h1>Editing Staff: {{$staff->name}}</h1>
    <form action="{{route('staff.update', $staff->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="col-4">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$staff->name}}"><br>
        </div>

        <div class="col-4">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" value="{{$staff->username}}"><br>
        </div>

        <div class="col-4">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{$staff->email}}"><br>
        </div>

        <div class="col-4">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$staff->phone}}"><br>
        </div>

        <div class="col-4">
            <label class="form-label">Role</label>
            <input type="text" class="form-control" name="role_id" placeholder="Role" value="{{$staff->role_id}}"><br>
        </div>

        <div class="col-4">
            <label class="form-label">Job Title</label>
            <input type="text" class="form-control" name="job_title" placeholder="Job Title" value="{{$staff->job_title}}"><br>
        </div>
        <hr>
        <input type="submit" class="btn btn-success" value="Update">
    </form>
@endsection
