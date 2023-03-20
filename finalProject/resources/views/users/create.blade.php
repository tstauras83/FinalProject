@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users Creation Form</h1>
            <form method="POST" action="{{ route('users.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                <div class="col-4">
                    <label class="form-label">Name: </label>
                    <input type="text" class="form-control" name="name" placeholder="" value="">
                </div>

                <div class="col-4">
                    <label class="form-label">Email: </label>
                    <input type="text" class="form-control" name="email" placeholder="" value="">
                </div>

                <div class="col-4">
                    <label class="form-label">Password: </label>
                    <input type="text" class="form-control"name="password" placeholder="" value="">
                </div>

                <div class="col-4">
                    <label class="form-label">Role ID: </label>
                    <input type="text" class="form-control" name="role_id" placeholder="" value="">
                </div>

                <div class="col-4">
                    <label class="form-label">Phone Number: </label>
                    <input type="text" class="form-control" name="phone_number" placeholder="" value="">
                </div>

                <div class="col-4">
                    <label class="form-label">Address: </label>
                    <input type="text" class="form-control" name="address" placeholder="" value="">
                </div>
                    @csrf
                    <input type="submit" class="btn btn-success" value="Submit">
            </form>


        </div>
    </div>
@endsection
