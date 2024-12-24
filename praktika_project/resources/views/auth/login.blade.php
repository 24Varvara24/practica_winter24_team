@extends('layouts.parent')
@section('title') 
<title>Личный кабинет</title>
@endsection
@section('style')

<link rel="stylesheet" href="{{asset('css\mainpage\login.css')}}" >

@endsection

@section('main')
<div class="reg">
    <div class="container">
        <div class="reg__content">
            <p class="reg__title">авторизация</p>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
                        <!-- <input class="input" type="text" placeholder="ФИО"> -->
                        <p class="inp__lable">введите почту</p>
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> 
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        

        <!-- Password -->
        <div>
            <p class="inp__lable">введите пароль</p>

            <x-text-input class="input" id="password" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div >
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="inp__lable" name="remember">
                <span class="inp__lable">{{ __('Запомнить меня') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="inp__lable" href="{{ route('password.request') }}">
                    {{ __('Забыли пароль?') }}
                </a>
            @endif

            <x-primary-button class="btn">
                {{ __('Войти') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>
</div>
@endsection
