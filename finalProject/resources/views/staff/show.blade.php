@extends('layouts.main')

@section('title', 'Staff')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
                <div class="card-content">
                    <h5>Name: {{ $staff->name }}</h5>
                    <h5>Username: {{ $staff->username }}</h5>
                    <h5>Email: {{ $staff->email }}</h5>
                    <h5>Phone: {{ $staff->phone }}</h5>
                    <h5>Role: {{$staff->role->name}}</h5>
                    <h5>Job Title: {{ $staff->job_title }}</h5>

                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$staff" mainRoute="staff"/>
                </div>
            </div>
        </div>
    </div>
@endsection
