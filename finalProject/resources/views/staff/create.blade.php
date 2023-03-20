@extends('layouts.main')

@section('title', 'Staff')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Staff Create</h1>
            <form method="POST" action="{{ route('staff.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                <label>Name</label>
                <input type="text" name="name" placeholder="Name" value=""><br>

                <label>Username</label>
                <input type="text" name="username" placeholder="Username" value=""><br>

                <label>Email</label>
                <input type="text" name="email" placeholder="Email" value=""><br>

                <label>Phone</label>
                <input type="text" name="phone" placeholder="Phone" value=""><br>

                <label>Role</label>
                <input type="number" name="role_id" placeholder="Role ID" value=""><br>

                <label>Job Title</label>
                <input type="text" name="job_title" placeholder="Job Title" value=""><br>

                <label>Employment Date</label>
                <input type="date" name="employment_date" placeholder="Employment Date" value=""><br>

                <label>Termination Date</label>
                <input type="date" name="termination_date" placeholder="Termination Date" value=""><br>

                <label>Salary</label>
                <input type="number" name="salary" placeholder="Salary" value=""><br>

                <label>Department</label>
                <input type="text" name="department" placeholder="Department" value=""><br>

                <label>Supervisor ID</label>
                <input type="number" name="supervisor_id" placeholder="Supervisor ID" value=""><br>

                <label>Photo</label>
                <input type="text" name="photo_url" placeholder="Photo" value=""><br>

                    @csrf
                    <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
