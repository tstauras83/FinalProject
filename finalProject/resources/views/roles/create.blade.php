@extends('layouts.main')

@section('title', 'Roles')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users Create</h1>
            <form method="POST" action="{{ route('roles.store') }}">
                    <input type="hidden" class="" placeholder="ID" value="">

                    <label>Name: </label>
                    <input type="text" class="" name="name" placeholder="" value="">

                    <label>Description: </label>
                    <input type="text" class="" name="description" placeholder="" value="">


                    @csrf
                    <input type="submit" class="" value="Submit">
            </form>


        </div>
    </div>
@endsection
