@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Staff</h1>
                        <x-forms.buttons.create mainRoute="staff" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role ID</th>
                    <th>Job Title</th>
                    <th>Employment Date</th>
                    <th>Termination Date</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Supervisor ID</th>
                    <th>Photo URL</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($staffs as $staff)
                    <tr>
                        <td>{{$staff->id}}</td>
                        <td>{{$staff->name}}</td>
                        <td>{{$staff->username}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->phone}}</td>
                        <td>
                            @if ($staff->role_id == 1)
                                Admin
                            @elseif ($staff->role_id == 2)
                                PM
                            @elseif ($staff->role_id == 3)
                                User
                            @endif
                        </td>

                        <td>{{$staff->job_title}}</td>
                        <td>{{$staff->employment_date}}</td>
                        <td>{{$staff->termination_date}}</td>
                        <td>{{$staff->salary}}</td>
                        <td>{{$staff->department}}</td>
                        <td>{{$staff->supervisor_id}}</td>
                        <td>{{$staff->photo_url}}</td>
                        <td>
                            <x-forms.buttons.action :model="$staff" mainRoute="staff"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
