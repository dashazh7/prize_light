<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">

     <!-- jQuery -->
    <script src="./js/jquery-3.7.1.js" ></script>

     <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">

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

    <!-- Фиксированная шапка -->
    <header class="fixed__header">
        <div class="container">
            <nav class="fixed__header-navigation">
                <div class="fixed__header-logo">
                    <a href="index.php"><img src="./images/logo_white.svg" alt=""></a>
                    <div class="fixed__header-logo--text">
                        <h1>Инженерные изыскания в строительстве с 1991</h1>
                        <p>С нами надежнее</p>
                    </div>
                </div>
                <div class="fixed__header-contacts">
                    <a class="fixed__header-contacts--number" href="tel:+79526891244">+7 (952) 689-12-44</a>
                    <a class="fixed__header-contacts--email" href="mailto:example@yandex.ru">example@yandex.ru</a>
                    <a class="fixed__header-contacts--btn" href="#request">
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
                    <img src="./images/logo_blue.svg" alt="Логотип">
                    <p>Инженерные изыскания в строительстве с 1991</p>
                </div>
                <div class="header__info-contact">
                    <a class="header__email">
                        priz72@mail.com
                        <img id="dropdownToggle" src="./images/header/expand_more.svg" alt="">
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
                            <img id="AboutDropdownToggle" src="./images/header/expand_more-white.svg" alt="">
                        </a>
                        <div class="header__about-window">
                            <a href="equipment.php" data-slide-to="0">Материально-техническая база</a>
                            <a href="history.php" data-slide-to="1">История</a>
                        </div>
                    </li>
                    <li><a href="">Геодезия</a></li>
                    <li><a href="">Геология</a></li>
                    <li><a href="">Экология</a></li>
                    <li><a href="">Дополнительные услуги</a></li>
                    <li><a href="#projects">Проекты</a></li>
                    <li><a href="#advantages">Почему мы</a></li>
                    <li><a href="#achievements">Достижения</a></li>
                </ul>
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
                            <img src="./images/about-us/about-us-adaptation.png" alt="">
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
                        <img src="./images/about-us/about-us.png" alt="">
                    </div>
                </div>
            </div>
        </section>

         <!-- Услуги -->
        <section class="services" id="services">
            <div class="container">
                <h1 class="services__title">Услуги</h1>
                <p class="services__paragraph">Какой-то текст Какой-то текст</p>
            </div>
            <div class="owl-carousel-container">
                <div class="owl-carousel owl-theme slider-one">
                    <div class="item" id="service1">
                        <div class="services__card">
                            <img src="./images/services/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
                                <p class="services__card-paragraph">Текст текст текст текст текст текст текст текст</p>
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
                    <div class="item" id="service2">
                        <div class="services__card">
                            <img src="./images/services/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Услуга 2</h2>
                                <p class="services__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Геодезия</h2>
                                <p class="services__card-hidden-text">Более 125 выполненных проектов</p>
                                <p class="services__card-hidden-text">Испытание свай статической вдавливающей нагрузкой</p>
                                <p class="services__card-hidden-text">Испытание свай статической выдёргивающей нагрузкой</p>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="service3">
                        <div class="services__card">
                            <img src="./images/services/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Услуга 3</h2>
                                <p class="services__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Геодезия</h2>
                                <p class="services__card-hidden-text">Более 125 выполненных проектов</p>
                                <p class="services__card-hidden-text">Испытание свай статической вдавливающей нагрузкой</p>
                                <p class="services__card-hidden-text">Испытание свай статической выдёргивающей нагрузкой</p>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="service4">
                        <div class="services__card">
                            <img src="./images/services/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Услуга 4</h2>
                                <p class="services__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Геодезия</h2>
                                <p class="services__card-hidden-text">Более 125 выполненных проектов</p>
                                <p class="services__card-hidden-text">Испытание свай статической вдавливающей нагрузкой</p>
                                <p class="services__card-hidden-text">Испытание свай статической выдёргивающей нагрузкой</p>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="service5">
                        <div class="services__card">
                            <img src="./images/services/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Услуга 5</h2>
                                <p class="services__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Геодезия</h2>
                                <p class="services__card-hidden-text">Более 125 выполненных проектов</p>
                                <p class="services__card-hidden-text">Испытание свай статической вдавливающей нагрузкой</p>
                                <p class="services__card-hidden-text">Испытание свай статической выдёргивающей нагрузкой</p>
                            </div>
                        </div>
                    </div>
                    <div class="item" id="service6">
                        <div class="services__card">
                            <img src="./images/services/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Услуга 6</h2>
                                <p class="services__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="services__card-hidden">
                                <h2 class="services__card-hidden-title">Геодезия</h2>
                                <p class="services__card-hidden-text">Более 125 выполненных проектов</p>
                                <p class="services__card-hidden-text">Испытание свай статической вдавливающей нагрузкой</p>
                                <p class="services__card-hidden-text">Испытание свай статической выдёргивающей нагрузкой</p>
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
                <p class="projects__paragraph">Какой-то текст Какой-то текст</p>
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
                <p class="advantages__paragraph">Какой-то текст какой-то текст </p>
            
                <div class="advantages__list">
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantages/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                </div>
            </div>
        </section>

         <!-- Достижения -->
        <section class="achievements" id="achievements">
            <div class="container">
                <h1 class="achievements__title">ДОСТИЖЕНИЯ И ПАТЕНТЫ</h1>
                <p class="achievements__paragraph">Какой-то текст Какой-то текст</p>
            </div>

            <div class="owl-carousel-container">
                <div class="owl-carousel owl-theme slider-three">
                    <div class="item">
                        <div class="achievements__card">
                            <h2>ООО Запсибгазпром</h2>
                            <a href="./images/achievements/achievement.png" data-fancybox="gallery">
                                <img src="./images/achievements/achievement.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="achievements__card">
                            <h2>ООО Запсибгазпром</h2>
                            <a href="./images/achievements/achievement.png" data-fancybox="gallery">
                                <img src="./images/achievements/achievement.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="achievements__card">
                            <h2>ООО Запсибгазпром</h2>
                            <a href="./images/achievements/achievement.png" data-fancybox="gallery">
                                <img src="./images/achievements/achievement.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="achievements__card">
                            <h2>ООО Запсибгазпром</h2>
                            <a href="./images/achievements/achievement.png" data-fancybox="gallery">
                                <img src="./images/achievements/achievement.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="achievements__card">
                            <h2>ООО Запсибгазпром</h2>
                            <a href="./images/achievements/achievement.png" data-fancybox="gallery">
                                <img src="./images/achievements/achievement.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="achievements__card">
                            <h2>ООО Запсибгазпром</h2>
                            <a href="./images/achievements/achievement.png" data-fancybox="gallery">
                                <img src="./images/achievements/achievement.png" alt="">
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
                            <button class="request__form-button" type="submit">Оставить заявку</button>
                            </form>
                    </div>
                    <div class="request__images">
                        <div class="request__images-column">
                            <img class="request__images-first" src="./images/request/req1.png" alt="">
                            <img class="request__images-second" src="./images/request/req3.png" alt="">
                        </div>
                        <img class="request__images-third" src="./images/request/req2.png" alt="">
                    </div>

                    <div class="request__images-adaptation">
                        <img src="./images/about-us/about-us.png" alt="">
                    </div>
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

    <!-- Кнопка звонка -->
    <a href="tel:+1234567890" class="callback-bt">
        <img src="./images/call.svg" alt="">
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
    <script src="./js/toggleCallbackButton.js"></script>
    <script src="./js/modalWindow.js"></script>
    <script src="./js/phoneNumberFormat.js"></script>
    <script src="./js/headerWindow.js"></script>
    <script src="./js/servicesWindow.js"></script>
    <script src="./js/owlCarousel.js"></script>
    <script src="./js/copyToClipboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".fixed__header");
    const aboutSection = document.querySelector("#about");

    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            header.classList.remove("visible");
        } else {
            header.classList.add("visible");
        }
    }, { threshold: 0.1 });

    observer.observe(aboutSection);
});

    </script>
    

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