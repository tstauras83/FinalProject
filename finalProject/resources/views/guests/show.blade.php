@extends('layouts.main')

@section('title', 'Guests')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $guest->name }}</span>
                </div>
                <div class="card-content">
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
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$guest" mainRoute="guests"/>
                </div>
            </div>
        </div>
    </div>
@endsection
