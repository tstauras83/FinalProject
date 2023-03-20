@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="form-group row">
                                <x-input-label for="name" :value="__('Name')" class="col-md-4 col-form-label text-md-right" />
                                <div class="col-md-6">
                                    <x-text-input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="invalid-feedback" />
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="form-group row">
                                <x-input-label for="email" :value="__('Email')" class="col-md-4 col-form-label text-md-right" />
                                <div class="col-md-6">
                                    <x-text-input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group row">
                                <x-input-label for="password" :value="__('Password')" class="col-md-4 col-form-label text-md-right" />

                                <div class="col-md-6">
                                    <x-text-input id="password" class="form-control @error('password') is-invalid @enderror"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group row">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="col-md-4 col-form-label text-md-right" />

                                <div class="col-md-6">
                                    <x-text-input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                                                  type="password"
                                                  name="password_confirmation"
                                                  required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback" />
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already registered? Login') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
