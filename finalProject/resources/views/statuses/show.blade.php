@extends('layouts.main')

@section('title', 'Statuses')

@section('content')
    <div class="row" style="background-color:#474748;">
        <div class="col-4">
            <div class="card" style="background-color:#474748; color:white;">
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
