@extends('layouts.base')

@section('content')
<style>
        input [type="text"]:focus,
        [type="email"]:focus,
        [type="url"]:focus,
        [type="password"]:focus,
        [type="number"]:focus,
        [type="date"]:focus,
        [type="datetime-local"]:focus,
        [type="month"]:focus,
        [type="search"]:focus,
        [type="tel"]:focus,
        [type="time"]:focus,
        [type="week"]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:hover,
        [type="email"]:hover,
        [type="url"]:hover,
        [type="password"]:hover,
        [type="number"]:hover,
        [type="date"]:hover,
        [type="datetime-local"]:hover,
        [type="month"]:hover,
        [type="search"]:hover,
        [type="tel"]:hover,
        [type="time"]:hover,
        [type="week"]:hover,
        [multiple]:hover,
        textarea:hover,
        select:hover {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:active,
        [type="email"]:active,
        [type="url"]:active,
        [type="password"]:active,
        [type="number"]:active,
        [type="date"]:active,
        [type="datetime-local"]:active,
        [type="month"]:active,
        [type="search"]:active,
        [type="tel"]:active,
        [type="time"]:active,
        [type="week"]:active,
        [multiple]:active,
        textarea:active,
        select:active {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }
    </style>
    
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{route('login')}}">
                   @csrf
                    <div class="login-title">
                        <h2>LOG IN</h2>
                    </div>
                    <div class="input">
                        <label for="name">Utilisateur:</label>
                        <input type="email" id="name" name="email" :value="old('email')" required="" autofocus=""
                            autocomplete="name">
                            @error('email') <span class="text-danger mt-3">{{$message}}</span> @enderror
                    </div>

                    <div class="input">
                        <label for="pass">Mot de passe:</label>
                        <input type="password" id="pass" class="block mt-1 w-full" name="password" required=""
                            autocomplete="current-password">
                            @error('password') <span class="text-danger mt-3">{{$message}}</span> @enderror
                    </div>

                    <a href="javascript:void(0)" class="pass-forgot">Mot de passe oublié?</a>

                    <div class="button login">
                        <button type="submit">
                            <span>Se connecter</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>

                    <p>Vous ne disposez pas de compte? <a href="{{route('register')}}" class="theme-color">Inscrivez vous maintenant</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
