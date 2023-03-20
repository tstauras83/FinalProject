@extends('layouts.main')

@section('title', 'Roles')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $role->name }}</span>
                </div>
                <div class="card-content">
                    <p>Name: {{ $role->name }}</p>
                    <p>Description: {{ $role->description }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$role" mainRoute="roles"/>
                </div>
            </div>
        </div>
    </div>
@endsection
