@extends('layouts.main')

@section('title', 'statuses')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Status Create</h1>
            <form method="POST" action="{{ route('statuses.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                    <label>Status: </label>
                    <input type="text" class="" name="status" placeholder="" value="">

                    <label>Description: </label>
                    <input type="text" class="" name="description" placeholder="" value="">


                    @csrf
                    <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
