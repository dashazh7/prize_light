<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- Шапка -->
    <header class="header">
        <div class="container">
            <div class="header__info">
                <div class="header__info-logo">
                    <a href="index.php"><img src="./images/logo_blue.svg" alt="Логотип ООО 'ПРИЗ'"></a>
                    <p>Инженерные изыскания в строительстве с 1991</p>
                </div>
                <div class="header__info-contact">
                    <a class="header__email">
                        priz72@mail.com
                        <img id="dropdownToggle" src="./images/header/expand_more-blue.svg" alt="Открыть меню контактов">
                    </a>

                    <div class="header__window">
                        <p>Директор<br><a href="tel:+79526891244" onclick="copyToClipboard(this)">+7 (952) 689-12-44</a></p>
                        <p>Бухгалтер<br><a href="tel:+79526891244">+7 (952) 689-12-44</a></p>
                        <a class="header__window-button" href="#request">Оставить заявку</a>
                        <p>Email<br><a href="mailto:example@yandex.ru" onclick="copyToClipboard(this)">example@yandex.ru</a></p>
                        <p>Адрес<br><a href="" onclick="copyToClipboard(this)">г.Тюмень, ул. Шмидта, д.48а </a></p>
                        <p>Режим работы<br><a href="" class="no-cursor">Пн-Пт: 9:00-18:00</a></p>
                    </div>

                    <a class="header__request" href="#request">
                        Оставить заявку
                    </a>
                </div>
            </div>

            <div class="header__navigation">
                <ul class="header__menu">
                    <li class="header__about">
                        <a class="header__menu-window">
                            О нас
                            <img id="AboutDropdownToggle" src="./images/header/expand_more-white.svg" alt="Открыть меню">
                        </a>
                        <div class="header__about-window">
                            <a href="material_base.php">Материально-техническая база</a>
                            <a href="history.php">История</a>
                        </div>
                    </li>
                    <li><a href="#service1" data-slide-to="0">Геодезия</a></li>
                    <li><a href="#service2" data-slide-to="1">Геология</a></li>
                    <li><a href="#service3" data-slide-to="2">Экология</a></li>
                    <li><a href="#service4" data-slide-to="3">Дополнительные услуги</a></li>
                    <li><a href="#projects">Проекты</a></li>
                    <li><a href="#advantages">Почему мы</a></li>
                    <li><a href="#achievements">Достижения</a></li>
                </ul>
            </div>
        </div> 
    </header>

    <!-- Шапка для устройств меньше 900px -->
    <header class="header__adaptation">
        <div class="container">
            <div class="header__adaptation-navigation">
                <div class="navigation__menu">
                    <img class="navigation__menu-img" src="./images/menu.svg" alt="Открыть меню">
                    <!-- Раскрывающееся меню -->
                    <div class="navigation__menu-window">
                        <div class="screens-wrapper">
                            
                            <!-- Первый экран -->
                            <div class="menu-screen">
                                <div class="menu-about-link">
                                    <a href="#">О нас</a>
                                    <img src="./images/arrow_right.svg" alt="Раскрыть раздел">
                                </div>
                                <a href="#service1" data-slide-to="0">Геодезия</a>
                                <a href="#service2" data-slide-to="1">Геология</a>
                                <a href="#service3" data-slide-to="2">Экология</a>
                                <a href="#service4" data-slide-to="3">Дополнительные услуги</a>
                                <a href="#projects">Проекты</a>
                                <a href="#advantages">Почему мы</a>
                                <a href="#achievements">Достижения</a>
                            </div>

                            <!-- Второй экран -->
                            <div class="menu-screen">
                                <a href="#" class="menu-back">
                                    <img src="./images/arrow_left.svg" alt="Назад">
                                </a>
                                <a href="material_base.php">Материально-техническая база</a>
                                <a href="history.php">История</a>
                            </div>
                        </div>
                    </div>

                    <div class="navigation__menu-logo">
                        <a href="index.php"><img src="./images/logo_white.svg" alt="Логотип ООО 'ПРИЗ'"></a>
                        <p>Инженерные изыскания в строительстве с 1991</p>
                    </div>
                </div>

                <div class="navigation__contact">
                    <div class="contact-wrapper">
                        <img class="contact-icon" src="./images/call_adaptation.svg" alt="Открыть окно контактов">
                        <!-- Раскрывающееся окно контактов -->
                        <div class="navigation__contact-window">
                            <p>Директор<br><a href="tel:+79526891244" onclick="copyToClipboard(this)">+7 (952) 689-12-44</a></p>
                            <p>Бухгалтер<br><a href="tel:+79526891244">+7 (952) 689-12-44</a></p>
                            <a class="navigation__contact-window--button" href="#request">Оставить заявку</a>
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
        <section class="equipment">
            <div class="container">
                <h1 class="equipment__title">Материально-техническая база</h1>
                <div class="equipment__links">
                    <a href="index.php">Главная</a> <span>—</span>
                    <p>Материально-техническая база</p>
                </div>
                <div class="equipment__text">
                    <p>ООО «ПРИЗ» является членом саморегулируемой организации «Изыскательские  организации Сибири» с 2009 года и обладателем допуска к определённым видам работ, которые оказывают влияние на безопасность объектов капитального строительства и объектов опасных и технически сложных, а именно:</p>

                    <ol>
                        <li>Работы в составе инженерно-геодезических изысканий;</li>

                        <li>Работы в составе инженерно-геологических изысканий;</li>

                        <li>Работы в составе инженерно-экологических изысканий;</li>

                        <li>Работы в составе инженерно-гидрометеорологических изысканий;</li>

                        <li>Работы в составе инженерно-геотехнических изысканий;</li>

                        <li>Обследование состояния грунтов основания зданий и сооружений.</li>
                    </ol>

                    <p>С полным списком видов работ можно ознакомиться в Свидетельстве 04-И № 443 от 2015г.</p>

                    <p>Материально-техническая база Техника и оборудование, которыми располагает ООО «ПРИЗ», полностью обеспечивают качественное выполнение всех работ на современном уровне.</p>

                    <p>Для проведения полевых инженерно-геологических изысканий фирмы имеет необходимый парк буровой техники – буровая установка УРБ-2А2, буровые установки УГБ-1ВС на базе автомобилей «ЗИЛ» и «Урал», ПБУ-2-117 на базе автомобиля «КамАЗ», Крано-бурильная машина Kunglim и другие. Все буровые установки оснащены оборудованием для статического зондирования грунтов производства ГеоТЕСТ (г. Екатеринбург). Есть специальная техника собственной разработки ТУСЗ - тяжелая установка статического зондирования, для исследований грунтов на предельных глубинах.</p>

                    <p>Лабораторные исследования состава, свойств грунтов, химического состава воды производятся на новейшем оборудовании таких производителей как, ГЕОЕСТ и ЛИГА, в том числе исследование образцов грунта с помощью трехосного сжатия. Лаборатория имеет необходимые условия для выполнения измерений в области деятельности, согласно приложения, о чем свидетельствует Заключение о состояние измерений в лаборатории № 2423 до 15.12.2026 года.</p>

                    <p>Камеральная группа, лаборатория размещаются в офисном здании  в центре города Тюмени, с просторными помещениями.</p>

                    <p>Для проведения испытания свай статической вдавливающей нагрузкой согласно ГОСТ 5686-94 используется 4 специальных стенда.</p>

                    <p>Предприятие оснащено электронными тахеометрами Nikon, устройством спутниковой системы GPS Trimble GNNS R8 III  для выполнения инженерно-геодезических изысканий. Имеются современные трассоискатели, электронные рулетки, геофизические радары.</p>

                    <p>При проведении инженерно-экологических изысканий ООО «ПРИЗ» производит исследования в аккредитованных лабораториях страны.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__navigation">
                <a class="footer__logo" href="">
                    <img class="footer__logo-img" src="./images/logo_white.svg" alt="">
                    ООО "ПРИЗ"
                </a>
                <ul class="footer__menu">
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#projects">Проекты</a></li>
                    <li><a href="#advantages">Почему мы</a></li>
                    <li><a href="#achievements">Достижения</a></li>
                </ul>
            </div>
           
            <p class="footer__divider"></p>

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
        </div>
    </footer>

    <!-- Подключение JavaScript файлов -->
    <script src="./js/toggleCallbackButton.js"></script>
    <script src="./js/modalWindow.js"></script>
    <script src="./js/phoneNumberFormat.js"></script>
    <script src="./js/headerWindow.js"></script>
    <script src="./js/aboutWindow.js"></script>
    <script src="./js/owlCarousel.js"></script>
    <script src="./js/copyToClipboard.js"></script>
    <script src="./js/fixedHeader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script src="./js/windowsMobile.js"></script>
</body>
</html>