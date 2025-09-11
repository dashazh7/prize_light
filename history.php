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
                                <li><a href="/geodesy">Геодезия</a></li>
                                <li><a href="/geology">Геология</a></li>
                                <li><a href="/ecology">Экология</a></li>
                                <li><a href="/additional_services">Дополнительные услуги</a></li>
                                <li><a href="/projects">Проекты</a></li>
                                <li><a href="/advantages">Почему мы</a></li>
                                <li><a href="/achievements">Достижения</a></li>
                            </div>

                            <!-- Второй экран -->
                            <div class="menu-screen">
                                <a href="#" class="menu-back">
                                    <img src="./images/arrow_left.svg" alt="">
                                </a>
                                <a href="material_base">Материально-техническая база</a>
                                <a href="history">История</a>
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
        <section class="history">
            <div class="container">
                <h1 class="history__title">История компании</h1>
                <div class="history__links">
                    <a href="/">Главная</a> <span>—</span>
                    <p>История компании</p>
                </div>
                <div class="history__text">
                    <p>Фирма ООО «ПРИЗ» организована в непростые времена - в 1991 году, из сокращенных специалистов советского треста «ТюменьТИСИЗ».</p>

                    <p>Директором ООО «ПРИЗ» с первых дней стал Лужбин Михаил Дмитриевич, который закончил трудовую деятельность в стенах института ЗапСибПНИИС в должности главного геолога техотдела.</p>

                    <p>В первые годы ООО «ПРИЗ» тесно сотрудничало с Тюменской домостроительной компанией в лице ее директора Щепелина Николая Игнатьевича. Большой объем изысканий с 1991 года по 2013 года был выполнен для таких объектов, как микрорайоны МЖК и Тюменский.</p>

                    <p>В эти же годы разворачивает строительство ПСК ДОМ в лице директора - Вольфсон Михаила Геннадьевича. Изыскания для этой организации были и есть в приоритете для нас. Он в первую очередь, занимался интересными проектами со сложными инженерно-геологическими условиями, в том числе на склонах оврагов.</p>

                    <p>Проектная организация ОАО «Градъ» (бывший институт «Тюменьгражданпроект») в лице, директора Моргуна Эдуарда Михайловича в 1995 году пригласила сотрудников ООО «ПРИЗ» выполнить изыскания для своих значимых проектов, которые до сих пор радуют глаз горожан: здание «Лукойла», бывшая гостиница «Кволити-Тюмень», «музейный комплекс имени И.Я. Словцова, мемориал Победы на улице Мельникайте и др.</p>

                    <p>За свой <span>50-летний стаж</span> в области ИНЖЕНЕРНЫХ ИЗЫСКАНИЙ, директор ООО «ПРИЗ» Лужбин Михаил Дмитриевич, благодаря сотрудничеству с лидерами строительной отрасли Тюменской области, сумел сделать следующее:</p>
            
                    <ul>
                        <li>Стать пионером в области ИТ-решений для коллег инженеров-геологов, когда не было современных компьютеров, создав и опубликовав в свои 33 года  - Сборник программ для инженерно-геологических расчетов на микрокалькуляторах типа «Электроника БЗ-34».Госстрой РСФСР. НПО «Стройизыскания», г. Москва, 1988г.</li>

                        <li>С помощью созданного в 2000 году программного комплекса «ИнгеоПРИЗ», позволяющего не только производить расчеты в области инженерно-геологических изысканий, но и создать и развить самую большую <span>электронную базу данных</span> геологических разрезов г. Тюмени.</li>

                        <li>Первым (2001 год) в нашем регион сумел создать и доказать эффективность использования установки для испытания грунтов статической вдавливающей нагрузкой с использованием анкерных шнеков (Патент на полезную модель №71669 от 20.03.2007).</li>

                        <li>Учитывая специфику региональных грунтов изобрел и применил - тяжелую установку статического зондирования для вдавливания в грунт зондов I и II типа в соответствии с требованиями ГОСТ 19912, <span>глубиной до 30 метров</span>. (Патент на полезную модель №2009101356/22 (001662) от 17.02.2009).</li>

                        <li> Последеяя разработка - патент на изобретение №2556777 «Способ возведения эталонного фундамента». Патентообладатель: ООО «ПРИЗ» от 23.04.2014г. (Ru). Позволяет выбрать оптимальный вариант свайных фундаментов в грунтовых условиях Западной Сибири.</li>
                    </ul>

                    <p>Данное изобретение заключается в том, что если инженерно-геологические условия строительной площади неоднородные в каждой точке забивки свай, то в этом случае, чтобы сваи несли одинаковую расчетную нагрузку от сооружения, их нужно забивать на разную глубину в зависимости от несущей способности грунтов в каждой точке забивки, которую заранее  можно определить экспресс-методом – статистическим зондированием с расчетом несущей способности свай по I типу или II типу конструкции зонда, с учетом конкретных геологических условий (песчаных или глинистых грунтов). Вывод: когда мы знаем несущую способность каждой сваи, тогда можно признать на практике возможность возведения эталонного свайного фундамента.</p>

                    <p>В целом, данное изобретение применяется на всех объектах, где ООО «ПРИЗ» выполняет инженерно-геологические изыскания.</p>

                    <p>К примеру на третьей очереди Антипинского НПЗ, где очень пестрый разрез создавал большие проблемы в определении длины свай и их несущей способности.</p>

                    <p>Благодаря применению метода строительства эталонных фундаментов были практически исключены натурные испытания свай на глубинах, на которых их удалось погрузить. Экономия составила порядка 2,5 миллиона рублей (Федеральный деловой журнал ТСР №2-3 (85-86) февраль=март 2014 г., стр. 78).</p>

                    <p>Иногда приходилось решать уникальные задачи для нашего города -  бурение среди ткацких станков  внутри производственного цеха, бывшего камвольно-суконного комбината <span>(ЖК «Баланс»)</span>, или со льда озера Песьяного <span>(ЖК «Эпитеты»)</span>,  или на подтопляемой территории реки Тобол для сохранения <span>Крестовоздвиженской Церкви</span> в городе Тобольске.</p>
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
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/projects">Проекты</a></li>
                    <li><a href="/advantages">Почему мы</a></li>
                    <li><a href="/achievements">Достижения</a></li>
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
    <script src="./js/headerWindow.js"></script>
    <script src="./js/aboutWindow.js"></script>
    <script src="./js/copyToClipboard.js"></script>
    <script src="./js/windowsMobile.js"></script>
    <script src="./js/scrollSections.js"></script>
</body>
</html> 