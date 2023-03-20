@extends('layouts.main')

@section('title', 'emailnotifs')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users Create</h1>
            <form method="POST" action="{{ route('email_notifications.store') }}">
                <input type="hidden" class="" placeholder="ID" value="">

                <label>Emailed From: </label>
                <input type="text" class="" name="emailed_from" placeholder="" value="">

                <label>Emailed To: </label>
                <input type="text" class="" name="emailed_to" placeholder="" value="">

                <label>Email Subject: </label>
                <input type="text" class="" name="email_subject" placeholder="" value="">

                <label>Email Content: </label>
                <input type="text" class="" name="email_content" placeholder="" value="">

                @csrf
                <input type="submit" class="" value="Submit">
            </form>

        </div>
    </div>
@endsection
