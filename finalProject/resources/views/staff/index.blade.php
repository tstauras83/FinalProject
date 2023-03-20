@extends('layouts.main')

@section('title', 'Staff')

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
                        <td>{{$staff->role->name}}</td>
                        <td>{{$staff->job_title}}</td>

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
