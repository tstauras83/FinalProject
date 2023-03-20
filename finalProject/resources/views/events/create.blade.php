@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users Create</h1>
            <form method="POST" action="{{ route('events.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">

                <label>Name: </label>
                <input type="text" name="name" placeholder="" value=""><br>

                <label>Description: </label>
                <input type="text" name="description" placeholder="Description" value=""><br>

                <label>Start Date: </label>
                <input type="date" name="start_date" placeholder="Start Date" value=""><br>

                <label>End Date: </label>
                <input type="date" name="end_date" placeholder="End Date" value=""><br>

                <label>Location: </label>
                <input type="text" name="location" placeholder="Location" value=""><br>

                <label>Address: </label>
                <input type="text" name="address" placeholder="Address" value=""><br>

                <label>City: </label>
                <input type="text" name="city" placeholder="City" value=""><br>

                <label>State: </label>
                <input type="text" name="state" placeholder="State" value=""><br>

                <label>Country: </label>
                <input type="text" name="country" placeholder="Country" value=""><br>

                <label>Zipcode: </label>
                <input type="text" name="zipcode" placeholder="Zipcode" value=""><br>

                <label>Created By: </label>
                <input type="text" name="created_by" placeholder="Created By" value=""><br>

                @csrf
                <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
