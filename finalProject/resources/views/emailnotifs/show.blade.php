@extends('layouts.main')

@section('title', 'emailnotifs')

@section('content')
    <div class="row">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    IMAGE :
                    <span class="card-title">{{ $email_notification->email_subject }}</span>
                </div>
                <div class="card-content">
                    <p>Emailed From: {{ $email_notification->emailed_from }}</p>
                    <p>Emailed To: {{ $email_notification->emailed_to }}</p>
                    <p>Email Content: {{ $email_notification->email_subject }}</p>
                    <p>Email Subject: {{ $email_notification->email_content }}</p>
                    <p>Created At: {{ $email_notification->created_at }}</p>
                    <p>Updated At: {{ $email_notification->updated_at }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$email_notification" mainRoute="email_notifications"/>
                </div>
            </div>
        </div>
    </div>
@endsection
