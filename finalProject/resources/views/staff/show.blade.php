@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $staff->name }}</span>
                </div>
                <div class="card-content">
                    <p>Name: {{ $staff->name }}</p>
                    <p>Username: {{ $staff->username }}</p>
                    <p>Email: {{ $staff->email }}</p>
                    <p>Phone: {{ $staff->phone }}</p>
                    <p>Role:
                        @if ($staff->role_id == 1)
                            Admin
                        @elseif ($staff->role_id == 2)
                            PM
                        @elseif ($staff->role_id == 3)
                            User
                        @endif
                    </p>
                    <p>Job Title: {{ $staff->job_title }}</p>
                    <p>Employment Date: {{ $staff->employment_date }}</p>
                    <p>Termination Date: {{ $staff->termination_date }}</p>
                    <p>Salary: {{ $staff->salary }}</p>
                    <p>Department: {{ $staff->department }}</p>
                    <p>Supervisor ID: {{ $staff->supervisor_id }}</p>
                    <p>Photo: {{ $staff->photo_url }}</p>

                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$staff" mainRoute="staff"/>
                </div>
            </div>
        </div>
    </div>
@endsection
