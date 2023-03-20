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
                    <th>Company</th>
                    <th>Job Title</th>
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
                        <td>
                            @if ($guest->role_id == 1)
                                Admin
                            @elseif ($guest->role_id == 2)
                                PM
                            @elseif ($guest->role_id == 3)
                                User
                            @endif
                        </td>
                        <td>{{$guest->phone}}</td>
                        <td>{{$guest->company}}</td>
                        <td>{{$guest->job_title}}</td>
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
