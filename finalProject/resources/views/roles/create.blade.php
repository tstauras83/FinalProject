@extends('layouts.main')

@section('title', 'Roles')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Role Creation Form</h1>
            <form method="POST" action="{{ route('roles.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">

                <div class="col-4">
                    <label class="form-label">Name: </label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value=""><br>
                </div>

                <div class="col-4">
                    <label class="form-label">Description: </label>
                    <input type="text" class="form-control" name="description" placeholder="Description" value=""><br>
                </div>


                @csrf
                <input type="submit" class="btn btn-success" value="Submit">
            </form>


        </div>
    </div>
@endsection
