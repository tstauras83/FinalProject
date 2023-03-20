@extends('layouts.main')

@section('title', 'Roles')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Roles</h1>
                        <x-forms.buttons.create mainRoute="roles" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>

                        <td>
                            <x-forms.buttons.action :model="$role" mainRoute="roles"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
