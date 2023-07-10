@extends('layouts.admin')

@section('content')

    <div class="intro">
        <div class="container header__container">
            <div class="header">
                <div class="logo">
                    <img class="logo_img" src="{{ asset('build/img/logotypes/logobeatbot.png') }}">
                    <p class="logo_text">BeatBot</p>
                    <p class="for_devs">админка</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="auth__window falling-text">
                <h2 class="auth__heading">Вход:</h2>
                <form method="POST" action="{{ route('admin.login_process') }}">
                    @csrf

                    <label class="auth__label" for="name">Имя пользователя:</label>
                    <br>

                    <input class="auth__input" type="text" id="name" name="name" required autofocus>

                    <label class="auth__label" for="password">Пароль:</label>
                    <br>
                    <input class="auth__input" type="password" id="password" name="password" required><br><br>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <br>
                    <input class="auth__button" type="submit" value="Войти">



                </form>
            </div>
        </div>
    </div>

@endsection
