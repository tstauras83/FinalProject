@extends('layouts.main')

@section('title', 'emailnotifs')

@section('content')
    @if($email_notification)
        <h1>Editing {{$email_notification->name}}</h1>
        <span>Redagavimo forma</span>
        <form action="{{ route('email_notifications.update', $email_notification->id) }}" method="post" enctype="multipart/form-data">

            @method('PUT')
            @csrf
            <label>Emailed From: </label>
            <input type="text" name="emailed_from" placeholder="Emailed From" value="{{$email_notification->emailed_from}}"><br>

            <label>Emailed To: </label>
            <input type="text" name="emailed_to" placeholder="Emailed To" value="{{$email_notification->emailed_to}}"><br>

            <label>Email Subject: </label>
            <input type="text" name="email_subject" placeholder="Email Subject" value="{{$email_notification->email_subject}}"><br>

            <label>Email Content: </label>
            <input type="text" name="email_content" placeholder="Email Content" value="{{$email_notification->email_content}}"><br>
            <hr>
            <input type="submit" class="waves-effect waves-light btn" value="Update">
        </form>
    @else
        <p>Email Notification not found</p>
    @endif

@endsection
