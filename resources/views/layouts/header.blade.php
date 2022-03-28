<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="SREDA">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="/image/favicon.png">
    <meta property="og:image" content="image/@1x/preview.jpg">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
    <div class="container-1920">
        <div class="header">
            <div class="header__nav">
                <div class="header__nav_logo">
                    <a href="/">
                        <img src="/image/_src/logo_small.svg" alt="logo_small">
                    </a>
                </div>

                <div class="header__nav_menu">
                    <ul>
                        <li><a href="#contacts">контакты</a></li>
                        <li><a href="{{ route('about') }}">о нас</a></li>
                        <li><a href="{{ route('process') }}">процесс</a></li>
                        <li><a href="{{ route('price') }}">цены</a></li>
                        <li><a href="{{ route('portfolio') }}">Портфолио</a></li>
                    </ul>
                </div>
                <div class="header__nav_menu_mobile">
                    <a href="tel:+380950124237"><span>+380</span> /95/ 012 42 37</a>
                    <div class="hamburger" id="hamburger-6">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="header__content" style="background-image: url(/image/_src/header_second.jpg);">
                <div class="header__content_top">
                    <a href="tel:+380950124237"><span>+380</span> /95/ 012 42 37</a>
                </div>
                <div class="header__content_middle">
                    <div class="header__content_middle_left">
                        <p>Есть идея дизайн-проекта, но некому её реализовать?</p>
                        <p class="green">Мы с радостью возьмемся за работу!</p>
                        <form>
                            <div class="form-content">
                                <label>
                                    <input type="text" name="phone" placeholder="+38">
                                </label>
                                <button type="submit">Позвоните мне!</button>
                            </div>
                        </form>
                        <a href="#mobile-form" class="mobile-only open-popup-form">Позвоните мне!</a>
                    </div>
                    <div class="header__content_middle_right">
                        <h2>СТУДИЯ ДИЗАЙНА ИНТЕРЬЕРА</h2>
                    </div>
                </div>
                <div class="header__content_bottom">
                    <h3>Ремонт / <span>240$ м2</span> дизайн-проект / <span>25$ м2</span></h3>
                    <div class="arrow">
                        <img src="image/_src/up.svg" alt="up">
                    </div>
                    <a href="#" class="tm">
                        <img src="image/_src/telega.svg" alt="telega">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
