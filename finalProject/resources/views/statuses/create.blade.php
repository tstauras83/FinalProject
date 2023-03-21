@extends('layouts.main')

@section('title', 'statuses')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Status Creation form</h1>
            <form method="POST" action="{{ route('statuses.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">

                <div class="col-4">
                    <label>Status: </label>
                    <input type="text" class="form-control" name="status" placeholder="Name" value=""><br>
                </div>

                <div class="col-4">
                    <label>Description: </label>
                    <input type="text" class="form-control" name="description" placeholder="description" value=""><br>
                </div>


                @csrf
                <input type="submit" class="btn btn-success" value="Submit">
            </form>


        </div>
    </div>
@endsection
