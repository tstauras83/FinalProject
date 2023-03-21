@extends('layouts.main')

@section('title', 'Events')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Event Creation</h1>
            <div class="row">
                <form method="POST" action="{{ route('events.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                    <div class="col-4">
                        <label class="form-label">Name: </label>
                        <input type="text" class="form-control" name="name" placeholder="" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">Description: </label>
                        <input type="text" class="form-control" name="description" placeholder="Description"
                               value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">Start Date: </label>
                        <input type="date" class="form-control" name="start_date" placeholder="Start Date" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">End Date: </label>
                        <input type="date" class="form-control" name="end_date" placeholder="End Date" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">Location: </label>
                        <input type="text" class="form-control" name="location" placeholder="Location" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">Address: </label>
                        <input type="text" class="form-control" name="address" placeholder="Address" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">City: </label>
                        <input type="text" class="form-control" name="city" placeholder="City" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">State: </label>
                        <input type="text" class="form-control" name="state" placeholder="State" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">Country: </label>
                        <input type="text" class="form-control" name="country" placeholder="Country" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">Zipcode: </label>
                        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode" value=""><br>
                    </div>

                    <div class="col-4">
                        <label class="form-label">Created By: </label>
                        <input type="text" class="form-control" name="created_by" placeholder="Created By" value=""><br>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-success" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
