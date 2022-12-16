{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-input-label for="email" :value="__('Email')" />--}}
{{--                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--                <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-input-label for="password" :value="__('Password')" />--}}

{{--                <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}

{{--                <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-primary-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-primary-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}

@extends('layouts.main')

@section('pagetitle')
    Registreren
@endsection

@section('content')

    <div class="container main-content">
        <div class="row first-row">
            <div class="col s6 push-s3">

                <!-- BEGIN LOGIN FORMULIER -->
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <form class="col s12" method="POST" action="{{ Route('login') }}">
                                @csrf
                                <h1 class="title">Aanmelden</h1>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="Email" name="email" type="text" class="validate" value="{{old('email')}}">
                                        <label for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="Password" type="password" name="password" class="validate">
                                        <label for="Password">Wachtwoord</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light right" type="submit" name="action">
                                            Aanmelden
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- EINDE LOGIN FORMULIER -->

            </div>
        </div>
    </div>
    <!-- EINDE PAGINA CONTAINER -->

    <!-- BEGIN FOOTER -->
    <footer class="page-footer white">
        <div class="container">
            <div class="row last-row">
                <div class="col s4">
                    <p>Copyright &copy; by Alfa-college AO, All rights reserved</p>
                </div>
                <div class="col s8">
                    <div class="footer-nav white">
                        <ul class="right">
                            <li><a href="rules.html">Regels</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="disclaimer.html">Disclaimer</a></li>
                            <li><a href="privacy.html">Privacy verklaring</a></li>
                            <li><a href="cookies.html">Cookie-beleid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- EINDE FOOTER -->

    <script type="text/javascript" src="js/ckeditor/plugins/prism/lib/prism/prism_patched.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/forum.js"></script>

@endsection


