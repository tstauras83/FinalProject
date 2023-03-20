@extends('layouts.main')

@section('title', 'Staff')

@section('content')
    <h1>Editing {{$staff->name}}</h1>
    <span>Redagavimo forma</span>
    <form action="{{route('staff.update', $staff->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$staff->name}}"><br>

        <label>Username</label>
        <input type="text" name="username" placeholder="Username" value="{{$staff->username}}"><br>

        <label>Email</label>
        <input type="text" name="email" placeholder="Email" value="{{$staff->email}}"><br>

        <label>Phone</label>
        <input type="text" name="phone" placeholder="Phone" value="{{$staff->phone}}"><br>

        <label>Role</label>
        <input type="text" name="role_id" placeholder="Role" value="{{$staff->role_id}}"><br>

        <label>Job Title</label>
        <input type="text" name="job_title" placeholder="Job Title" value="{{$staff->job_title}}"><br>

        <label>Employment Date</label>
        <input type="text" name="employment_date" placeholder="Employment Date" value="{{$staff->employment_date}}"><br>

        <label>Termination Date</label>
        <input type="text" name="termination_date" placeholder="Termination Date" value="{{$staff->termination_date}}"><br>

        <label>Salary</label>
        <input type="text" name="salary" placeholder="Salary" value="{{$staff->salary}}"><br>

        <label>Department</label>
        <input type="text" name="department" placeholder="Department" value="{{$staff->department}}"><br>

        <label>Supervisor ID</label>
        <input type="text" name="supervisor_id" placeholder="Supervisor ID" value="{{$staff->supervisor_id}}"><br>

        <label>Photo</label>
        <input type="text" name="photo_url" placeholder="Photo" value="{{$staff->photo_url }}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
