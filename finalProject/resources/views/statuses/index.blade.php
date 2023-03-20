@extends('layouts.main')

@section('title', 'Statuses')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Status</h1>
                        <x-forms.buttons.create mainRoute="statuses" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($statuses as $status)
                    <tr>
                        <td>{{$status->id}}</td>
                        <td>{{$status->status}}</td>
                        <td>{{$status->description}}</td>

                        <td>
                            <x-forms.buttons.action :model="$status" mainRoute="statuses"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
