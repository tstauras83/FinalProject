@extends('layouts.main')

@section('title', 'Staff')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Staff Creation Form</h1>
            <form method="POST" action="{{ route('staff.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                <div class="col-4">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value=""><br>
                </div>

                <div class="col-4">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value=""><br>
                </div>

                <div class="col-4">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value=""><br>
                </div>

                <div class="col-4">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value=""><br>
                </div>

                <div class="col-4">
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control" name="role_id" placeholder="Role" value=""><br>
                </div>

                <div class="col-4">
                    <label class="form-label">Job Title</label>
                    <input type="text" class="form-control" name="job_title" placeholder="Job Title" value=""><br>
                </div>


                    @csrf
                    <input type="submit" class="btn btn-success" value="Submit">
            </form>


        </div>
    </div>
@endsection
