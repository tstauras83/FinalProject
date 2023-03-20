@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
                <div class="card-content">
                    <h5>Name: {{ $user->name }}</h5>
                    <h5>Email: {{ $user->email }}</h5>
                    <h5>Role: {{$user->role->name}}</h5>
                    <h5>Phone Number: {{ $user->phone_number }}</h5>
                    <h5>Address: {{ $user->address }}</h5>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$user" mainRoute="users"/>
                </div>
            </div>
        </div>
    </div>
@endsection
