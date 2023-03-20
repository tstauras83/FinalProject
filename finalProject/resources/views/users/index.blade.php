@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users</h1>
            <x-forms.buttons.create mainRoute="users" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->address}}</td>

                        <td>
                            <x-forms.buttons.action :model="$user" mainRoute="users"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
