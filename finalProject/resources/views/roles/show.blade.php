@extends('layouts.main')

@section('title', 'Roles')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
                <div class="card-content">
                    <h5>Name: {{ $role->name }}</h5>
                    <h5>Description: {{ $role->description }}</h5>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$role" mainRoute="roles"/>
                </div>
            </div>
        </div>
    </div>
@endsection
