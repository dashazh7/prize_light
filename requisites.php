<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реквизиты</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.ico">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- Шапка -->
    <header class="header">
        <div class="container">
            <div class="header__info">
                <div class="header__info-logo">
                    <a href="/"><img src="./images/logo_blue.svg" alt=""></a>
                    <p>Инженерные изыскания в строительстве с 1991</p>
                </div>
                <div class="header__info-contact">
                    <a class="header__email">
                        priz72@mail.com
                        <img id="dropdownToggle" src="./images/header/expand_more-blue.svg" alt="">
                    </a>

                    <div class="header__window">
                        <p>Директор<br><a href="tel:+79526891244" onclick="copyToClipboard(this)">+7 (952) 689-12-44</a></p>
                        <p>Бухгалтер<br><a href="tel:+79526891244">+7 (952) 689-12-44</a></p>
                        <a class="header__window-button" href="/request">Оставить заявку</a>
                        <p>Email<br><a href="mailto:example@yandex.ru" onclick="copyToClipboard(this)">example@yandex.ru</a></p>
                        <p>Адрес<br><a href="" onclick="copyToClipboard(this)">г.Тюмень, ул. Шмидта, д.48а </a></p>
                        <p>Режим работы<br><a href="">Пн-Пт: 9:00-18:00</a></p>
                    </div>

                    <a class="header__request" href="/request">
                        Оставить заявку
                    </a>
                </div>
            </div>

            <div class="header__navigation">
                <ul class="header__menu">
                    <li class="header__about">
                        <a class="header__menu-window">
                            О нас
                            <img id="AboutDropdownToggle" src="./images/header/expand_more-white.svg" alt="">
                        </a>
                        <div class="header__about-window">
                            <a href="material_base">Материально-техническая база</a>
                            <a href="history">История</a>
                            <a href="requisites">Реквизиты</a>
                        </div>
                    </li>
                    <li><a href="/geodesy">Геодезия</a></li>
                    <li><a href="/geology">Геология</a></li>
                    <li><a href="/ecology">Экология</a></li>
                    <li><a href="/additional_services">Дополнительные услуги</a></li>
                    <li><a href="/projects">Проекты</a></li>
                    <li><a href="/advantages">Почему мы</a></li>
                    <li><a href="/achievements">Достижения</a></li>
                </ul>
            </div>
    </header>

    <!-- Шапка для устройств меньше 900px -->
    <header class="header__adaptation">
        <div class="container">
            <div class="header__adaptation-navigation">
                <div class="navigation__menu">
                    <img class="navigation__menu-img" src="./images/menu.svg" alt="">
                    <!-- Раскрывающееся меню -->
                    <div class="navigation__menu-window">
                        <div class="screens-wrapper">
                            
                            <!-- Первый экран -->
                            <div class="menu-screen">
                                <div class="menu-about-link">
                                    <a href="#">О нас</a>
                                    <img src="./images/arrow_right.svg" alt="">
                                </div>
                                <a href="/geodesy">Геодезия</a>
                                <a href="/geology">Геология</a>
                                <a href="/ecology">Экология</a>
                                <a href="/additional_services">Дополнительные услуги</a>
                                <a href="/projects">Проекты</a>
                                <a href="/advantages">Почему мы</a>
                                <a href="/achievements">Достижения</a>
                            </div>

                            <!-- Второй экран -->
                            <div class="menu-screen">
                                <a href="#" class="menu-back">
                                    <img src="./images/arrow_left.svg" alt="">
                                </a>
                                <a href="material_base">Материально-техническая база</a>
                                <a href="history">История</a>
                                <a href="requisites">Реквизиты</a>
                            </div>
                        </div>
                    </div>

                    <div class="navigation__menu-logo">
                        <a href="/"><img src="./images/logo_white.svg" alt=""></a>
                        <p>Инженерные изыскания в строительстве с 1991</p>
                    </div>
                </div>

                <div class="navigation__contact">
                    <div class="contact-wrapper">
                        <img class="contact-icon" src="./images/call_adaptation.svg" alt="">
                        <!-- Раскрывающееся окно контактов -->
                        <div class="navigation__contact-window">
                            <p>Директор<br><a href="tel:+79526891244" onclick="copyToClipboard(this)">+7 (952) 689-12-44</a></p>
                            <p>Бухгалтер<br><a href="tel:+79526891244">+7 (952) 689-12-44</a></p>
                            <a class="navigation__contact-window--button" href="/request">Оставить заявку</a>
                            <p>Email<br><a href="mailto:example@yandex.ru" onclick="copyToClipboard(this)">example@yandex.ru</a></p>
                            <p>Адрес<br><a href="" onclick="copyToClipboard(this)">г.Тюмень, ул. Шмидта, д.48а</a></p>
                            <p>Режим работы<br><a href="" class="no-cursor">Пн-Пт: 9:00-18:00</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="requisites">
            <div class="container">
                <h1 class="requisites__title">Реквизиты</h1>
                <div class="requisites__links">
                    <a href="/">Главная</a> <span>—</span>
                    <p>Реквизиты</p>
                </div>
                <table class="requisites__table">
                    <tbody>
                        <tr>
                            <td>Полное наименование:</td>
                            <td>Общество с ограниченной 0тветственностью "Приз"</td>
                        </tr>
                        <tr>
                            <td>Сокращённое наименование:</td>
                            <td>ООО "Приз"</td>
                        </tr>
                        <tr>
                            <td>Юридический адрес:</td>
                            <td>625007, Тюменская область, город Тюмень, ул. Шмидта, д.48а </td>
                        </tr>
                        <tr>
                            <td>ИНН/КПП:</td>
                            <td>7202018726/720301001</td>
                        </tr>
                        <tr>
                            <td>ОГРН:</td>
                            <td>1027200840700</td>
                        </tr>
                        <tr>
                            <td>Телефон:</td>
                            <td>????????</td>
                        </tr>
                        <tr>
                            <td>Электронная почта:</td>
                            <td>???????</td>
                        </tr>
                    </tbody>
                </table>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__navigation">
                <a class="footer__logo" href="/">
                    <img class="footer__logo-img" src="./images/logo_white.svg" alt="">
                    ООО "ПРИЗ"
                </a>
                <ul class="footer__menu">
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/projects">Проекты</a></li>
                    <li><a href="/advantages">Почему мы</a></li>
                    <li><a href="/achievements">Достижения</a></li>
                </ul>
            </div>
           
            <p class="footer__divider"></p>

            <div class="footer__bottom">
                <div class="footer__information">
                    <div class="footer__information-wrapper">
                        <div class="footer__address">
                            <p>город Тюмень, ул. Шмидта, д.48а</p>
                        </div>
                        <div class="footer__contacts">
                            <p>Телефон <a href="tel:+79526891244">+79526891244</a></p>
                            <p><a href="mailto:example@yandex.ru">example@yandex.ru</a></p>
                        </div>
                    </div>
                </div>

                <div class="footer__documents">
                    <a href="privacy_policy">Политика конфиденциальности</a>
                    <a href="personal_data">Обработка персональных данных</a>
                </div>
            </div>
        </div>
    </footer>

       <!-- Подключение JavaScript файлов -->
    <script src="./js/headerWindow.js"></script>
    <script src="./js/aboutWindow.js"></script>
    <script src="./js/copyToClipboard.js"></script>
    <script src="./js/windowsMobile.js"></script>
    <script src="./js/scrollSections.js"></script>
    <script src="./js/scrollAchievements.js"></script>
</body>
</html> 