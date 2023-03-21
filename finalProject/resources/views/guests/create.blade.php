@extends('layouts.main')

@section('title', 'Guests')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Guest Creation Form</h1>
            <form method="POST" action="{{ route('guests.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">
                <input type="hidden" class="form-control" name="role_id" placeholder="role_id" value="3">

                <div class="col-4">
                    <lavel class="form-label">Name:</lavel>
                    <input type="text" class="form-control" name="name" placeholder="Name" value=""><br>
                </div>

                <div class="col-4">
                    <lavel class="form-label">Username:</lavel>
                    <input type="text" class="form-control" name="username" placeholder="username" value=""><br>
                </div>

                <div class="col-4">
                    <lavel class="form-label">Email:</lavel>
                    <input type="email" class="form-control" name="email" placeholder="email" value=""><br>
                </div>

                <div class="col-4">
                    <lavel class="form-label">Phone:</lavel>
                    <input type="text" class="form-control" name="phone" placeholder="phone" value=""><br>
                </div>

                <div class="col-4">
                    <lavel class="form-label">Notes:</lavel>
                    <input type="text" class="form-control" name="notes" placeholder="notes" value=""><br>
                </div>
                @csrf
                <input type="submit" class="btn btn-success" value="Submit">
            </form>


        </div>
    </div>
@endsection
