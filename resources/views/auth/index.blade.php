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
<section class="authorization">
    <div class="container">
        <div class="authorization__wrapper wrapper">
            <div class="authorization__inner">
                <h1 class="authorization__title title">Вход в аккаунт.</h1>
                <form class="authorization__form form" action="{{route('login.store')}}" method="POST">
                    @csrf
                    <div class="authorization__input-box input-box">
                        <input class="authorization__form-input" type="text" placeholder="Адрес электронной почты." />
                    </div>
                    <div class="authorization__input-box input-box">
                        <input class="authorization__form-input" type="password" placeholder="Пароль."/>
                    </div>
                    <ul class="authorization__items">
                        <li class="registration-authorization__item">
                            <button type="submit" class="authorization__button button">
                                Войти
                            </button>
                        </li>
                        <li class="registration-authorization__item">
                            <a class="registration-authorization__item-link" href="{{route('register')}}">
                                Нет аккаунта? Регистрация.
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
