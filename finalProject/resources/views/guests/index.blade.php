@extends('layouts.main')

@section('title', 'guests')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Guests</h1>
                        <x-forms.buttons.create mainRoute="guests" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phone Number</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($guests as $guest)
                    <tr>
                        <td>{{$guest->id}}</td>
                        <td>{{$guest->name}}</td>
                        <td>{{$guest->username}}</td>
                        <td>{{$guest->email}}</td>
                        <td>{{$guest->role->name}}</td>
                        <td>{{$guest->phone}}</td>
                        <td>{{$guest->notes}}</td>

                        <td>
                            <x-forms.buttons.action :model="$guest" mainRoute="guests"/>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
