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
    <link rel="stylesheet" href="https://unpkg.com/swiper@9.0.0/swiper-bundle.min.css" />

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
    <header class="header">
        <div class="container">
            <nav class="header__navigation">
                <ul class="header__menu">
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#projects">Проекты</a></li>
                    <li><a href="#advantages">Почему мы</a></li>
                    <li><a href="#request">Достижения</a></li>
                </ul>

                <div class="header__logo">
                    <img src="./images/logotype.svg" alt="">
                    <p>Инженерные изыскания в строительстве с 1991</p>
                </div>
    
                <div class="header__contacts">
                    <a class="header__phone" >
                        +7 (952) 689-12-44
                        <img id="dropdownToggle" src="./images/icon/navigation/expand_more.svg" alt="">
                    </a>

                    <div class="header__window">
                        <a href="">+7 (952) 689-12-44</a>
                        <p>Бухгалтер<br><a href="tel:+79526891244">+7 (952) 689-12-44</a></p>
                        <p>Главный инженер<br><a href="tel:+79526891244">+7 (952) 689-12-44</a></p>
                        <a class="header__window-button" href="">Связаться с нами</a>
                        <p>Email<br><a href="mailto:example@yandex.ru">example@yandex.ru</a></p>
                        <p>Адрес<br><a href="">г.Тюмень, ул. Шмидта, д.48а</a></p>
                        <p>Режим работы<br><a href="">example@yandex.ru</a></p>
                    </div>

                    <a class="header__request" href="">
                        Связаться с нами 
                    </a>
                </div>

            </nav>
        </div>
    </header>
    
    <main>
        <div class="about-us__wrapper">
            <section class="about-us" id="about">
                <div class="background__adapt">
                    <div class="container">
                        <div class="about-us__content">
                            <div class="about-us__info">
                                <h1 class="about-us__title">Какой-то текст какой-то текст какой-то</h1>
                                <p class="about-us__paragraph">Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст Какой-то текст</p>
                                <div class="about-us__statistics">
                                    <div class="about-us__stat-item1">
                                        <h3 class="about-us__stat-value">30</h3>
                                        <p class="about-us__stat-label">Лет опыта</p>
                                    </div>
                                    <div class="about-us__stat-item2">
                                        <h3 class="about-us__stat-value">400+</h3>
                                        <p class="about-us__stat-label">Различных проектов</p>
                                    </div>
                                    <div class="about-us__stat-item3">
                                        <h3 class="about-us__stat-value">90%</h3>
                                        <p class="about-us__stat-label">Клиентов сотрудничают повторно</p>
                                    </div>
                                </div>
                            </div>
        
                            <div class="about-us__image">
                                <img src="./images/engineer-working-building-factory 5.png" alt="">
                            </div>
                        </div>
        
                        <div class="about-us__clients">
                            <h3 class="about-us__clients-title">Мы работаем с</h3>
                            <div class="about-us__clients-logos">
                                <img src="./images/logo_clients.svg">
                                <img src="./images/logo_clients.svg">
                                <img src="./images/logo_clients.svg">
                                <img src="./images/logo_clients.svg">
                                <img src="./images/logo_clients.svg">
                            </div>
                        </div>

                        <div class="about-us__button">
                            <a href="tel:+79526891244">Связаться с нами</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="services">
            <div class="container">
                <h1 class="services__title">Услуги</h1>
                <p class="services__paragraph">Какой-то текст Какой-то текст</p>
            </div>
            <div class="swiper servicesSwiper">
                <div class="swiper-wrapper">    
                    <div class="swiper-slide">
                        <div class="services__card">
                            <img src="./images/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
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
                    <div class="swiper-slide">
                        <div class="services__card">
                            <img src="./images/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
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
                    <div class="swiper-slide">
                        <div class="services__card">
                            <img src="./images/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
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
                    <div class="swiper-slide">
                        <div class="services__card">
                            <img src="./images/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
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
                    <div class="swiper-slide">
                        <div class="services__card">
                            <img src="./images/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
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
                    <div class="swiper-slide">
                        <div class="services__card">
                            <img src="./images/service1.png">
                            <div class="services__card-content">
                                <h2 class="services__card-title">Геодезия</h2>
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
            <div class="swiper-button-next services-next"></div>
            <div class="swiper-button-prev services-prev"></div>

        </section>

        <section class="projects" id="projects">
            <div class="container">
                <h1 class="projects__title">НАШИ ПРОЕКТЫ</h1>
                <p class="projects__paragraph">Какой-то текст Какой-то текст</p>
            </div>

            <div class="swiper projectsSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="projects__card">
                            <img src="3.png">
                            <div class="projects__card-content">
                                <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="projects__card-hidden">
                                <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                <p class="projects__card-hidden-text1">Текст текст текст текст текст текст текст текст</p>
                                <p class="projects__card-hidden-text2">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="projects__card">
                            <img src="3.png">
                            <div class="projects__card-content">
                                <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                            </div>
                            <div class="projects__card-hidden">
                                <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                <p class="projects__card-hidden-text1">Текст текст текст текст текст текст текст текст</p>
                                <p class="projects__card-hidden-text2">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                            </div>
                        </div>
                    </div>
            
            
        </div>
        <div class="swiper-button-next project-next"></div>
        <div class="swiper-button-prev project-prev"></div> 
    </div>
         
            
        </section>


        <section class="advantages" id="advantages">
            <div class="container">
                <h1 class="advantages__title">ПОЧЕМУ МЫ?</h1>
                <p class="advantages__paragraph">Какой-то текст какой-то текст </p>
                <div class="advantages__list">
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage-icon.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="achievements">
            <div class="container">
                <h1 class="achievements__title">ДОСТИЖЕНИЯ И ПАТЕНТЫ</h1>
                <p class="achievements__paragraph">Какой-то текст Какой-то текст</p>
            </div>

            <div class="swiper achievementsSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide achievementsSwiper-slide">
                        <h2>ООО Запсибгазпром</h2>
                        <img src="./images/грамота.png">
                    </div>
                    <div class="swiper-slide achievementsSwiper-slide">
                        <h2>ООО Запсибгазпром</h2>
                        <img src="./images/грамота.png">
                    </div>
                    <div class="swiper-slide achievementsSwiper-slide">
                        <h2>ООО Запсибгазпром</h2>
                        <img src="./images/грамота.png">
                    </div>
                    <div class="swiper-slide achievementsSwiper-slide">
                        <h2>ООО Запсибгазпром</h2>
                        <img src="./images/грамота.png">
                    </div>
                </div>
            </div>
            <div class="swiper-button-next achievements-next"></div>
            <div class="swiper-button-prev achievements-prev"></div>
        </section>




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
                            <img class="request__images-first" src="./images/req1.png" alt="">
                            <img class="request__images-second" src="./images/req3.png" alt="">
                        </div>
                        <img class="request__images-third" src="./images/req2.png" alt="">
                    </div>

                    <div class="request__images-adaptation">
                        <img src="./images/engineer-working-building-factory 5.png" alt="">
                    </div>

                </div>
            </div>        
        </section>
    </main>

    

    <footer class="footer">
        <div class="container">
            <div class="footer__navigation">
                <a class="footer__logo" href="">
                    <img class="footer__logo-img" src="./images/logotype.svg" alt="">
                    ООО "ПРИЗ"
                </a>
                <ul class="footer__menu">
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#projects">Услуги</a></li>
                    <li><a href="#projects">Проекты</a></li>
                    <li><a href="#advantages">Почему мы</a></li>
                    <li><a href="#request">Достижения</a></li>
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
        <img src="./images/icons/icons/communication/Vector.svg" alt="">
    </a>

    <!-- Модальное окно -->
    <div id="successModal" class="modal">
        <div class="modal__content">
            <div class="modal__content-info">
                <img src="./images/ok2.svg" alt="">
                <p>Спасибо!</p>
                <h2>Ваша заявка отправлена!</h2>
                <button class="modal__close">ОК</button>
            </div>
        </div>
    </div>

    <!-- Подключение JavaScript файлов -->
    <script src="./js/toggleCardContent.js"></script>
    <script src="https://unpkg.com/swiper@9.0.0/swiper-bundle.min.js"></script>
    <script src="./js/swiperSlider.js"></script>
    <script src="./js/toggleCallbackButton.js"></script>
    <script src="./js/modalWindow.js"></script>
    <script src="./js/phoneNumberFormat.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("dropdownToggle");
    const dropdown = document.querySelector(".header__window");

    toggleButton.addEventListener("click", function (event) {
        event.preventDefault(); // Чтобы не было перезагрузки страницы
        dropdown.classList.toggle("active");

        // Меняем картинку стрелочки
        if (dropdown.classList.contains("active")) {
            toggleButton.src = "./images/icon/navigation/expand_less.png"; // Стрелка вверх
        } else {
            toggleButton.src = "./images/icon/navigation/expand_more.svg"; // Стрелка вниз
        }
    });

    // Закрытие при клике вне окна
    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target) && event.target !== toggleButton) {
            dropdown.classList.remove("active");
            toggleButton.src = "./images/icon/navigation/expand_more.svg"; // Возвращаем стрелку вниз
        }
    });
});


</script>




</body>
</html>

<?php
    unset($_SESSION['errors']);
    unset($_SESSION['old_data']);
?>