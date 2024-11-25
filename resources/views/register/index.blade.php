<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="logo" href="{{route('index')}}"> Talkio. </a>
        </div>
    </div>
</header>
<section class="registration">
    <div class="container">
        <div class="registration_wrapper wrapper">
            <div class="registration__inner">
                <h1 class="registration__title title">
                    Регистрация аккаунта.
                </h1>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                <form class="registration__form form" action="{{route('register.store')}}" method="POST">
                    @csrf
                    <div class="registration__input-box input-box">
                        <input
                            class="registration__form-input"
                            type="text"
                            placeholder="Адрес электронной почты."
                            name="email"
                        />
                    </div>
                    <div class="registration__input-box input-box">
                        <input class="registration__form-input" type="text" placeholder="Логин." name="name" />
                    </div>
                    <div class="registration__input-box input-box">
                        <input class="registration__form-input" type="password" placeholder="Пароль." name="password"/>
                    </div>
                    <ul class="registration__items">
                        <li class="registration-authorization__item">
                            <button type="submit" class="registration__button button">
                                Регистрация
                            </button>
                        </li>
                        <li class="registration-authorization__item">
                            <a class="registration-authorization__item-link" href="{{route('login')}}">
                                Уже с нами? Войти в аккаунт.
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom">
        <p class="bottom__text">2024 Talkio</p>
    </div>
</section>
</body>
</html>
