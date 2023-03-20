@extends('layouts.main')

@section('title', 'Guests')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
                <div class="card-content">
                    <h5>Name: {{$guest->name}}</h5>
                    <h5>Username: {{$guest->username}}</h5>
                    <h5>Email: {{$guest->email}}</h5>
                    <h5>Role: {{$guest->role->name}}</h5>
                    <h5>Phone: {{$guest->phone}}</h5>
                    <h5>Notes: {{$guest->notes}}</h5>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$guest" mainRoute="guests"/>
                </div>
            </div>
        </div>
    </div>
@endsection
