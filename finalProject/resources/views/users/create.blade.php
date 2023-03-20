@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users Create</h1>
            <form method="POST" action="{{ route('users.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                    <label>Name: </label>
                    <input type="text" class="" name="name" placeholder="" value="">

                    <label>Email: </label>
                    <input type="text" class="" name="email" placeholder="" value="">

                    <label>Password: </label>
                    <input type="text" class="" name="password" placeholder="" value="">

                    <label>Role ID: </label>
                    <input type="text" class="" name="role_id" placeholder="" value="">

                    <label>Phone Number: </label>
                    <input type="text" class="" name="phone_number" placeholder="" value="">

                    <label>Address: </label>
                    <input type="text" class="" name="address" placeholder="" value="">

                    <label>PFP: </label>
                    <input type="text" class="" name="profile_picture" placeholder="" value="">

                    @csrf
                    <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
