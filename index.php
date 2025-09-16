<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ООО «Приз» — инженерные изыскания в Тюмени | Геология, геодезия, экология</title>
    <meta name="description" content="ООО «Приз» — инженерные изыскания в Тюмени с 1991 года. Выполнение геологических, геодезических, экологических, гидрометеорологических и геотехнических работ, обследование грунтов с использованием собственной лаборатории и парка буровой техники">
    <meta name="keywords" content="инженерные изыскания, геологические изыскания, геодезические изыскания, экологические изыскания, геотехнические изыскания, гидрометеорологические изыскания, обследование грунтов, буровые работы, лаборатория грунтов, Тюмень, ООО ПРИЗ">

    <link rel="stylesheet" href="./css/main.css">

     <!-- jQuery -->
    <script src="./js/jquery-3.7.1.js" ></script>

     <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(100180695, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/100180695" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
    <!-- Фиксированная шапка -->
    <header class="fixed__header">
        <div class="container">
            <nav class="fixed__header-navigation">
                <div class="fixed__header-logo">
                    <a href="/"><img src="./images/logo_white.svg" alt=""></a>
                    <div class="fixed__header-logo--text">
                        <h1>Инженерные изыскания в строительстве с 1991</h1>
                        <p>С нами надежнее</p>
                    </div>
                </div>
                <div class="fixed__header-contacts">
                    <a class="fixed__header-contacts--number" href="tel:+79526891244">+7 (952) 689-12-44</a>
                    <a class="fixed__header-contacts--email" href="mailto:example@yandex.ru">example@yandex.ru</a>
                    <a class="fixed__header-contacts--btn" href="/request" onclick="scrollToSection('request'); return false;">
                        Оставить заявку
                    </a>
                </div>
            </nav>
        </div>
    </header>
   

    <!-- Шапка -->
    <header class="header">
        <div class="container">
            <div class="header__info">
                <div class="header__info-logo">
                    <img src="./images/logo_blue.svg" alt="">
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
                        <a class="header__window-button" href="/request" onclick="scrollToSection('request'); return false;">Оставить заявку</a>
                        <p>Email<br><a href="mailto:example@yandex.ru" onclick="copyToClipboard(this)">example@yandex.ru</a></p>
                        <p>Адрес<br><a href="" onclick="copyToClipboard(this)">г.Тюмень, ул. Шмидта, д.48а </a></p>
                        <p>Режим работы<br><a href="" class="no-cursor">Пн-Пт: 9:00-18:00</a></p>
                    </div>

                    <a class="header__request" href="/request" onclick="scrollToSection('request'); return false;">
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
                    <li><a href="/geodesy" onclick="scrollToSection('geodesy'); return false;">Геодезия</a></li>
                    <li><a href="/geology" onclick="scrollToSection('geology'); return false;">Геология</a></li>
                    <li><a href="/ecology" onclick="scrollToSection('ecology'); return false;">Экология</a></li>
                    <li><a href="/additional_services" onclick="scrollToSection('additional_services'); return false;">Дополнительные услуги</a></li>
                    <li><a href="/projects" onclick="scrollToSection('projects'); return false;">Проекты</a></li>
                    <li><a href="/advantages" onclick="scrollToSection('advantages'); return false;">Почему мы</a></li>
                    <li><a href="/achievements" onclick="scrollToSection('achievements'); return false;">Достижения</a></li>
                </ul>
            </div>
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
                                <a href="/geodesy" onclick="scrollToSection('geodesy'); return false;">Геодезия</a>
                                <a href="/geology" onclick="scrollToSection('geology'); return false;">Геология</a>
                                <a href="/ecology" onclick="scrollToSection('ecology'); return false;">Экология</a>
                                <a href="/additional_services" onclick="scrollToSection('additional_services'); return false;">Дополнительные услуги</a>
                                <a href="/projects" onclick="scrollToSection('projects'); return false;">Проекты</a>
                                <a href="/advantages" onclick="scrollToSection('advantages'); return false;">Почему мы</a>
                                <a href="/achievements" onclick="scrollToSection('achievements'); return false;">Достижения</a>
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
                        <img src="./images/logo_white.svg" alt="">
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
         <!-- О нас -->
        <section class="about-us" id="about">
            <div class="container">
                <div class="about-us__content">
                    <div class="about-us__info">
                        <h1 class="about-us__title">Более 30 лет опыта инженерных изысканий</h1>
                        <p class="about-us__paragraph">Мы проводим комплексные исследования грунтов, экологии и геологии для безопасного строительства объектов любой сложности</p>
                        <div class="about-us__adaptation-image">
                            <img src="./images/about-us/about-adaptation.jpg" alt="">
                        </div>
                        <div class="about-us__statistics">
                            <div class="about-us__stat-item1">
                                <h3 class="about-us__stat-value">34</h3>
                                <p class="about-us__stat-label">Года в строительной индустрии</p>
                            </div>
                            <div class="about-us__stat-item2">
                                <h3 class="about-us__stat-value">6</h3>
                                <p class="about-us__stat-label">Буровых установок</p>
                            </div>
                            <div class="about-us__stat-item3">
                                <h3 class="about-us__stat-value">100%</h3>
                                <p class="about-us__stat-label">Гарантия получения экспертизы</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="about-us__image">
                        <img src="./images/about-us/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

         <!-- Услуги -->
        <section class="services" id="services">
            <div class="container">
                <h1 class="services__title">Услуги</h1>
                <p class="services__paragraph">Выполняем различные работы</p>
            </div>
            <div class="owl-carousel-container">
                <div class="owl-carousel owl-theme slider-one">
                    <div class="item" id="geodesy">
                        <div class="services__card">
                            <img src="./images/services/geodesy.jpg">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Геодезия</h2>
                                <p class="services__card-hidden-text">Создание опорных геодезических сетей</p>
                                <p class="services__card-hidden-text">Создание и обновление инженерно-топографических планов в масштабах 1:200 – 1:5000, в том числе в цифровой форме, съемка подземных коммуникаций и сооружений</p>
                                <p class="services__card-hidden-text">Геодезические наблюдения за деформациями и осадками зданий и сооружений, движениями земной поверхности и опасными природными процессами</p>
                                <p class="services__card-hidden-text">Трассирование линейных объектов</p>
                                <p class="services__card-hidden-text">Инженерно-гидрографические работы</p>
                                <p class="services__card-hidden-text">Специальные геодезические и топографические работы при строительстве и реконструкции зданий и сооружений</p>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="geology">
                        <div class="services__card">
                            <img src="./images/services/geology.jpg">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геология</h2>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Геология</h2>
                                <p class="services__card-hidden-text">Инженерно-геологическая съемка в масштабах 1:500 – 1:25000</p>
                                <p class="services__card-hidden-text">Проходка горных выработок с их опробованием, лабораторные исследования физико-механических свойств грунтов и химических свойств подземных вод</p>
                                <p class="services__card-hidden-text">Изучение опасных геологических и инженерно-геологических процессов с разработкой рекомендаций по инженерной защите территории</p>
                                <p class="services__card-hidden-text">Гидрологические исследования</p>
                                <p class="services__card-hidden-text">Инженерно-геокриологические исследования</p>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="ecology">
                        <div class="services__card">
                            <img src="./images/services/ecology.jpg">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Экология</h2>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Экология</h2>
                                <p class="services__card-hidden-text">Инженерно-экологическая съемка территории</p>
                                <p class="services__card-hidden-text">Исследования химического загрязнения почвогрунтов, поверхностных и подземных вод, атмосферного воздуха, источников загрязнения</p>
                                <p class="services__card-hidden-text">Исследования и оценка физических воздействий и радиационной обстановки на территории</p>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="additional_services">
                        <div class="services__card">
                            <img src="./images/services/additional_services.jpg">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Дополнительные услуги</h2>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Дополнительные услуги</h2>
                                <p class="services__card-hidden-text">Испытания грунтов статической нагрузкой на сваю</p>
                                <p class="services__card-hidden-text">Штамповые испытания грунтов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Проекты -->
        <section class="projects" id="projects">
            <div class="container">
                <h1 class="projects__title">НАШИ ПРОЕКТЫ</h1>
                <p class="projects__paragraph">Наши реализованные проекты и успешные решения</p>
            </div>

            <div class="owl-carousel-container">
                <div class="owl-carousel owl-theme slider-two">
                    <div class="item">
                        <div class="projects__card">
                            <img src="./images/projects/project.png">
                            <div class="projects__card-content">
                                <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="projects__card-hidden">
                                <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                <p class="projects__card-hidden-text1">Текст текст текст текст текст текст текст текст</p>
                                <p class="projects__card-hidden-text2">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="projects__card">
                            <img src="./images/projects/project.png">
                            <div class="projects__card-content">
                                <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="projects__card-hidden">
                                <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                <p class="projects__card-hidden-text1">Текст текст текст текст текст текст текст текст</p>
                                <p class="projects__card-hidden-text2">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="projects__card">
                            <img src="./images/projects/project.png">
                            <div class="projects__card-content">
                                <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="projects__card-hidden">
                                <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                <p class="projects__card-hidden-text1">Текст текст текст текст текст текст текст текст</p>
                                <p class="projects__card-hidden-text2">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </section>

        <!-- Почему мы -->
        <section class="advantages" id="advantages">
            <div class="container">
                <h1 class="advantages__title">ПОЧЕМУ МЫ?</h1>
                <p class="advantages__paragraph">Без понимания задачи, мы будем не идти к цели, а бродить</p>
            
                <div class="advantages__list">
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/edit.svg" alt="">
                        <p class="advantages__item-text">Совместно уточняем задачу, помогаем составить ТЗ</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/checkmark.svg" alt="">
                        <p class="advantages__item-text">Сопровождаем заказчика до получения положительного заключения экспертизы</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/money.svg" alt="">
                        <p class="advantages__item-text">Прозрачные и честные цены</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/monitor.svg" alt="">
                        <p class="advantages__item-text">Мы работаем через ЭДО — это быстро, прозрачно и экономит время на бумажных документах</p>
                    </div>
                </div>
            </div>
        </section>

         <!-- Достижения -->
        <section class="achievements" id="achievements">
            <div class="container">
                <h1 class="achievements__title">ДОСТИЖЕНИЯ И ПАТЕНТЫ</h1>
                <p class="achievements__paragraph">Наши достижения и запатентованные решения</p>
            </div>

            <div class="owl-carousel-container">
                <div class="owl-carousel owl-theme slider-three">
                    <div class="item" id="certificate_db">
                        <div class="achievements__card">
                            <a href="./images/achievements/certificate_db.jpg" data-fancybox="gallery" data-caption="Свидетельство об официальной регистрации базы данных">
                                <img src="./images/achievements/certificate_db.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="certificate_computer">
                        <div class="achievements__card">
                            <a href="./images/achievements/certificate_computer.jpg" data-fancybox="gallery" data-caption="Свидетельство об официальной регистрации программы для ЭВМ">
                                <img src="./images/achievements/certificate_computer.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="patent2556755">
                        <div class="achievements__card">
                            <a href="./images/achievements/patent2556755.jpg" data-fancybox="gallery" data-caption="Патент на изобретение № 2556755. Способ возведения эталонного фундамента">
                                <img src="./images/achievements/patent2556755.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="patent83778">
                        <div class="achievements__card">
                            <a href="./images/achievements/patent83778.jpg" data-fancybox="gallery" data-caption="Патент на полезную модель № 83778. Установка для статического зондирования">
                                <img src="./images/achievements/patent83778.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="patent71669">
                        <div class="achievements__card">
                            <a href="./images/achievements/patent71669.jpg" data-fancybox="gallery" data-caption="Патент на полезную модель № 71669. Устройство для статического испытания свай">
                                <img src="./images/achievements/patent71669.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="diploma2013">
                        <div class="achievements__card">
                            <a href="./images/achievements/diploma2013.jpg" data-fancybox="gallery" data-caption="Диплом победителя конкурса “На лучшее достижение в строительной отрасли Тюменской области за 2013 год”">
                                <img src="./images/achievements/diploma2013.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="diploma2014">
                        <div class="achievements__card">
                            <a href="./images/achievements/diploma2014.jpg" data-fancybox="gallery" data-caption="Диплом победителя конкурса “На лучшее достижение в строительной отрасли Тюменской области в 2014 году”">
                                <img src="./images/achievements/diploma2014.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="collection">
                        <div class="achievements__card">
                            <a href="./images/achievements/collection.jpg" data-fancybox="gallery" data-caption="Сборник программ для инженерно-геологических расчетов на микрокалькуляторах типа “Электроника БЗ-34">
                                <img src="./images/achievements/collection.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item" id="conclusion2423">
                        <div class="achievements__card">
                            <a 
                                href="./images/achievements/conclusion2423.pdf" 
                                data-fancybox="gallery" 
                                data-caption="Заключение № 2423 о состоянии измерений в лаборатории" 
                                data-type="iframe" 
                                data-width="1000" 
                                data-height="1000">
                                <img src="./images/achievements/conclusion2423.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>      
            </div>
        </section>

         <!-- Заявка -->
        <section class="request" id="request">
            <div class="container">
                <div class="request__container">
                    <div class="request__content">
                        <h1 class="request__title">Рассчитать стоимость услуги</h1>
                        <form class="request__form" id="request-form" method="POST" action="send_telegram.php">
                            <input name="tel" class="request__form-input request__form-input--tel" type="tel"
                                placeholder="Введите номер телефона" value="<?= $_SESSION['old_data']['tel'] ?? '' ?>" autocomplete="off">
                            <?php if (isset($_SESSION['errors']['tel'])) { ?>
                                <p class="validate_error"><?= $_SESSION['errors']['tel']; ?></p>
                            <?php } ?>
                            <input name="comment" class="request__form-input request__form-input--comment" type="text"
                                placeholder="Оставьте комментарий" value="<?= $_SESSION['old_data']['comment'] ?? '' ?>" autocomplete="off">
                            <?php if (isset($_SESSION['errors']['comment'])) { ?>
                                <p class="validate_error"><?= $_SESSION['errors']['comment']; ?></p>
                            <?php } ?>
                            <label class="request__form-checkbox">
                                <input type="checkbox" name="agreement" value="1" <?= isset($_SESSION['old_data']['agreement']) ? 'checked' : '' ?>>
                                Я согласен на <a href="personal_data" target="_blank">обработку персональных данных</a>
                            </label>
                            <?php if (isset($_SESSION['errors']['agreement'])) { ?>
                                <p class="validate_error"><?= $_SESSION['errors']['agreement']; ?></p>
                            <?php } ?>
                            <button class="request__form-button" type="submit">Оставить заявку</button>
                            </form>
                    </div>
                    <div class="request__images">
                        <div class="request__images-column">
                            <img class="request__images-first" src="./images/request/req1.jpg" alt="">
                            <img class="request__images-second" src="./images/request/req2.jpg" alt="">
                        </div>
                        <img class="request__images-third" src="./images/request/req3.jpg" alt="">
                    </div>

                    <div class="request__images-adaptation">
                        <img src="./images/request/req1.jpg" alt="">
                    </div>
                </div>
            </div>        
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
                    <li><a href="/about" onclick="scrollToSection('about'); return false;">О нас</a></li>
                    <li><a href="/services" onclick="scrollToSection('services'); return false;">Услуги</a></li>
                    <li><a href="/projects" onclick="scrollToSection('projects'); return false;">Проекты</a></li>
                    <li><a href="/advantages" onclick="scrollToSection('advantages'); return false;">Почему мы</a></li>
                    <li><a href="/achievements" onclick="scrollToSection('achievements'); return false;">Достижения</a></li>
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

    <!-- Кнопка звонка -->
    <a href="tel:+1234567890" class="call__button">
        <img src="./images/call_btn.svg" alt="">
    </a>

    <!-- Модальное окно при отправке заявки -->
    <div id="successModal" class="modal">
        <div class="modal__content">
            <div class="modal__content-info">
                <img src="./images/request-modal.svg" alt="">
                <p>Спасибо!</p>
                <h2>Ваша заявка отправлена!</h2>
                <button class="modal__close">ОК</button>
            </div>
        </div>
    </div>

    <!-- Подключение JavaScript файлов -->
    <script src="./js/callButton.js"></script>
    <script src="./js/modalWindow.js"></script>
    <script src="./js/phoneNumberFormat.js"></script>
    <script src="./js/headerWindow.js"></script>
    <script src="./js/aboutWindow.js"></script>
    <script src="./js/owlCarousel.js"></script>
    <script src="./js/copyToClipboard.js"></script>
    <script src="./js/fixedHeader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="./js/windowsMobile.js"></script>
    <script src="./js/fancybox.js"></script>
    <script src="./js/scrollSections.js"></script>
    <script src="./js/scrollAchievements.js"></script>

    <?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) { ?>
        <script>
            window.onload = function() {
                document.getElementById('request').scrollIntoView({ behavior: 'smooth' });
            }
        </script>
    <?php } ?>
</body>
</html>

<?php
    unset($_SESSION['errors']);
    unset($_SESSION['old_data']);
?>