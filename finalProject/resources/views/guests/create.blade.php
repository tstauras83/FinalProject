@extends('layouts.main')

@section('title', 'Guests')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Guest Create</h1>
            <form method="POST" action="{{ route('guests.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">

                <lavel>Name:</lavel>
                <input type="text" name="name" placeholder="Name" value=""><br>

                <lavel>Username:</lavel>
                <input type="text" name="username" placeholder="username" value=""><br>

                <lavel>Email:</lavel>
                <input type="email" name="email" placeholder="email" value=""><br>

                <lavel>Role ID:</lavel>
                <input type="text" name="role_id" placeholder="role_id" value=""><br>

                <lavel>Phone:</lavel>
                <input type="text" name="phone" placeholder="phone" value=""><br>

                <lavel>Company:</lavel>
                <input type="text" name="company" placeholder="company" value=""><br>

                <lavel>Job Title:</lavel>
                <input type="text" name="job_title" placeholder="job_title" value=""><br>

                <lavel>Notes:</lavel>
                <input type="text" name="notes" placeholder="notes" value=""><br>

                @csrf
                <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
