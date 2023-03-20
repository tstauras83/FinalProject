@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $user->name }}</span>
                </div>
                <div class="card-content">
                    <p>Name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Role:
                        @if ($user->role_id == 1)
                            Admin
                        @elseif ($user->role_id == 2)
                            PM
                        @elseif ($user->role_id == 3)
                            User
                        @endif
                    </p>
                    <p>Phone Number: {{ $user->phone_number }}</p>
                    <p>Address: {{ $user->address }}</p>
                    <p>PFP: {{ $user->profile_picture }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$user" mainRoute="users"/>
                </div>
            </div>
        </div>
    </div>
@endsection
