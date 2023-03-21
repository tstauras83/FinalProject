@extends('layouts.main')

@section('title', 'Register')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="color:black">
                    <div class="card-header">{{ __('Register') }}</div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" style="background-color:white;">
                            @csrf
                            <!-- Name -->
                            <div class="form-group row">
                                <x-input-label for="name" :value="__('Name')"
                                               class="col-md-4 col-form-label text-md-right"/>
                                <div class="col-md-6">
                                    <x-text-input id="name" class="form-control" type="text" name="name"
                                                  :value="old('name')" required autofocus autocomplete="name"/>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                </div>
                            </div>


                            <!-- Email Address -->
                            <div class="form-group row">
                                <x-input-label for="email" :value="__('Email')"
                                               class="col-md-4 col-form-label text-md-right"/>
                                <div class="col-md-6">
                                    <x-text-input id="email" class="form-control" type="email" name="email"
                                                  :value="old('email')" required autocomplete="username"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group row">
                                <x-input-label for="password" :value="__('Password')"
                                               class="col-md-4 col-form-label text-md-right"/>
                                <div class="col-md-6">
                                    <x-text-input id="password" class="form-control"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="new-password"/>

                                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group row">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                                               class="col-md-4 col-form-label text-md-right"/>
                                <div class="col-md-6">

                                    <x-text-input id="password_confirmation" class="form-control"
                                                  type="password"
                                                  name="password_confirmation" required autocomplete="new-password"/>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="btn btn-link"
                                   href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="btn btn-primary">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
