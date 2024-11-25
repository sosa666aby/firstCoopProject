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
    <link type="text/css" rel="stylesheet" href="{{asset('css/welcome_page/style.css')}}" />
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="logo" href="{{route('index')}}"> Talkio. </a>
            <a class="authorization" href="#"> Вход/Регистрация </a>
        </div>
    </div>
</header>
<!-- top на main? -->
<section class="top">
    <div class="container">
        <div class="top__wrapper wrapper">
            <!-- мб обернуть в li'шки -->
            <div class="top__heading">
                <h1 class="top__heading-title title">
                    Начни свой путь в Talkio.
                </h1>
                <div class="top__heading-text">
                    <p>
                        Открой для себя мир общения, обмена идеями и
                        быстрых новостей.
                    </p>
                    <p>
                        Поделись своим мнением, следи за трендами и
                        заводи новые знакомства.
                    </p>
                    <p>
                        Зарегистрируйся, чтобы быть в центре событий и
                        начать свою уникальную историю прямо сейчас!
                    </p>
                </div>
                <div class="top__heading-bottom">
                    <a class="top__heading-button button" href="{{route('register')}}">
                        Начать общение
                    </a>
                </div>
            </div>
        </div>
    </div>
    <p class="top__text--rotate">Talkio.</p>
    <div class="bottom">
        <p class="bottom__text">2024 Talkio</p>
    </div>
    <img class="ringForText" src="{{asset('images/ringForText.svg')}}" alt="" />
    <!-- <img class="ringLeft" src="images/ringLeft.svg" alt=""> -->
    <div class="ringLeft"></div>
    <img class="topImages" src="{{asset('images/topImages.svg')}}" alt="" />
</section>
</body>
</html>
