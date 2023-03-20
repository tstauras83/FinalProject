@extends('layouts.main')

@section('title', 'Statuses')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-content">
                    <p>Status: {{ $status->status }}</p>
                    <p>Description: {{ $status->description }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$status" mainRoute="statuses"/>
                </div>
            </div>
        </div>
    </div>
@endsection
