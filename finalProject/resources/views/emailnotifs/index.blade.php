@extends('layouts.main')

@section('title', 'Email Notifications')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Email Notifications</h1>
                        <x-forms.buttons.create mainRoute="email_notifications" />
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Emailed From</th>
                    <th>Emailed To</th>
                    <th>Email Content</th>
                    <th>Email Subject</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($email_notifications as $email_notification)
                    <tr>
                        <td>{{$email_notification->id}}</td>
                        <td>{{$email_notification->emailed_from}}</td>
                        <td>{{$email_notification->emailed_to}}</td>
                        <td>{{$email_notification->email_subject}}</td>
                        <td>{{$email_notification->email_content}}</td>


                        <td>
                            <x-forms.buttons.action :model="$email_notification" mainRoute="email_notifications"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
