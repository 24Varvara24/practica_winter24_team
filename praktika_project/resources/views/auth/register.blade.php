{{-- <x-guest-layout> --}}
@extends('layouts.parent')
@section('title') 
<title>Регистрация</title>
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css\mainpage\reg.css')}}" >

@endsection
@section('main')
<div class="reg">
    <div class="container">
        <div class="reg__content">
            <p class="reg__title">Регистрация</p>
     <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <p class="inp__lable">введите ФИО</p>
            <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <p class="inp__lable">введите почту</p>
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

                <!-- Телефон -->
        <div class="mt-4">
            <p class="inp__lable">введите номер телефона</p>
            <x-text-input id="phone" class="input" type="tel" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        

                <!-- РОЛЬ -->
        <div class="mt-4">
            <p class="inp__lable">введите роль</p>
            <x-text-input id="role_id" class="input" type="text" name="role_id" :value="old('role_id')" required autocomplete="1" />
            
            <x-input-error :messages="$errors->get('1')" class="mt-2" />{{-- однерку может еще предстоит поменять --}}
        </div>

        <!-- Password -->
        <div class="mt-4">
            <p class="inp__lable">придумайте пароль</p>

            <x-text-input id="password" class="input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <p class="inp__lable">повторите пароль</p>

            <x-text-input id="password_confirmation" class="input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Есть аккаунт? Войти') }}
            </a>

            <x-primary-button class="btn">
                {{ __('Зарегистрироваться') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>
</div>
   
@endsection
{{-- </x-guest-layout> --}}
