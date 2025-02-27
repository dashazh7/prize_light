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
</head>
    <header class="header">
        <div class="container">
            <nav class="header__navigation">
                <div class="header__navigation-wrapper">
                    <a class="header__logo" href="#!">
                        <img class="header__logo-img" src="./images/Logo.svg" alt="Logotype">
                    </a>

                    <a class="header__logo-hidden">
                        <img class="header__logo-img" src="./images/logo_black.svg" alt="Logotype">
                        ООО "ПРИЗ"
                    </a>
    
                    <ul class="header__menu">
                        <li><a href="#about">О НАС</a></li>
                        <li><a href="#projects">ПРОЕКТЫ</a></li>
                        <li><a href="#advantages">ПОЧЕМУ МЫ</a></li>
                        <li><a href="#request">СВЯЗАТЬСЯ С НАМИ</a></li>
                    </ul>
                </div>
    
                <a class="header__phone" href="tel:+79526891244">
                    <img class="header__phone-icon" src="./images/call-calling.svg">
                    89526891244
                </a>
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
                                <img src="./images/Logo.svg">
                                <img src="./images/Logo.svg">
                                <img src="./images/Logo.svg">
                                <img src="./images/Logo.svg">
                                <img src="./images/Logo.svg">
                            </div>
                        </div>

                        <div class="about-us__button">
                            <a href="tel:+79526891244">Связаться с нами</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="projects" id="projects">
            <div class="container">
                <h1 class="projects__title">НАШИ ПРОЕКТЫ</h1>
                <p class="projects__paragraph">Какой-то текст Какой-то текст</p>
        
                <div class="projects__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="projects__card">
                                    <img src="./images/brusnika.png" alt="ЖК “Брусника”">
                                    <div class="projects__card-content">
                                        <div class="content-info">
                                            <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                            <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                                        </div>

                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="projects__card-hidden">
                                        <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                        <div class="projects__card-hidden-numbers">
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                        </div>
                                        
                                        <p class="projects__card-hidden-text">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow 9.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects__card">
                                    <img src="./images/brusnika.png" alt="ЖК “Брусника”">
                                    <div class="projects__card-content">
                                        <div class="content-info">
                                            <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                            <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                                        </div>

                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="projects__card-hidden">
                                        <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                        <div class="projects__card-hidden-numbers">
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                        </div>
                                        
                                        <p class="projects__card-hidden-text">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects__card">
                                    <img src="./images/brusnika.png" alt="ЖК “Брусника”">
                                    <div class="projects__card-content">
                                        <div class="content-info">
                                            <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                            <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                                        </div>

                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="projects__card-hidden">
                                        <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                        <div class="projects__card-hidden-numbers">
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                        </div>
                                        
                                        <p class="projects__card-hidden-text">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects__card">
                                    <img src="./images/brusnika.png" alt="ЖК “Брусника”">
                                    <div class="projects__card-content">
                                        <div class="content-info">
                                            <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                            <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                                        </div>

                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="projects__card-hidden">
                                        <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                        <div class="projects__card-hidden-numbers">
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                        </div>
                                        
                                        <p class="projects__card-hidden-text">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects__card">
                                    <img src="./images/brusnika.png" alt="ЖК “Брусника”">
                                    <div class="projects__card-content">
                                        <div class="content-info">
                                            <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                            <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                                        </div>

                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="projects__card-hidden">
                                        <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                        <div class="projects__card-hidden-numbers">
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                        </div>
                                        
                                        <p class="projects__card-hidden-text">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="projects__card">
                                    <img src="./images/brusnika.png" alt="ЖК “Брусника”">
                                    <div class="projects__card-content">
                                        <div class="content-info">
                                            <h2 class="projects__card-title">ЖК “Брусника”</h2>
                                            <p class="projects__card-paragraph">Текст текст текст текст текст текст текст текст</p>
                                        </div>

                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="projects__card-hidden">
                                        <h2 class="projects__card-hidden-title">ЖК “Брусника”</h2>
                                        <div class="projects__card-hidden-numbers">
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                            <div class="projects__card-hidden-number">
                                                <p class="projects__card-hidden-number-text">Какой-то текст</p>
                                                <p class="projects__card-hidden-number-value">40</p>
                                            </div>
                                        </div>
                                        
                                        <p class="projects__card-hidden-text">Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст Какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст какой-то текст</p>
                                        <div class="projects__card-button">
                                            <button class="projects__card-arrow-button toggle-button">
                                                <img src="./images/Arrow.png" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>


        <section class="advantages" id="advantages">
            <div class="container">
                <h1 class="advantages__title">ПОЧЕМУ МЫ?</h1>
                <p class="advantages__paragraph">Какой-то текст какой-то текст </p>
                <div class="advantages__list">
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                    <div class="advantages__item">
                        <img class="advantages__item-icon" src="./images/advantage.svg" alt="">
                        <p class="advantages__item-text">какой-то текст какой-то текст какой-то текст</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="request" id="request">
            <div class="container">
                <div class="request__container">
                    <div class="request__content">
                        <h1 class="request__title">Оставьте заявку прямо на сайте</h1>
                        <form class="request__form" id="request-form" method="POST" action="send_telegram.php">
                            <input name="tel" class="request__form-input request__form-input--tel" type="tel"
                                placeholder="Введите номер телефона" value="<?= $_SESSION['old_data']['tel'] ?? '' ?>" autocomplete="off">
                            <?php if (isset($_SESSION['errors']['tel'])) { ?>
                                <p class="error"><?= $_SESSION['errors']['tel']; ?></p>
                            <?php } ?>
                            <input name="comment" class="request__form-input request__form-input--comment" type="text"
                                placeholder="Оставьте комментарий" value="<?= $_SESSION['old_data']['comment'] ?? '' ?>" autocomplete="off">
                            <?php if (isset($_SESSION['errors']['comment'])) { ?>
                                <p class="error"><?= $_SESSION['errors']['comment']; ?></p>
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
                    <img class="footer__logo-img" src="./images/Logo.svg" alt="">
                    ООО "ПРИЗ"
                </a>
                <ul class="footer__menu">
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#projects">Наши проекты</a></li>
                    <li><a href="#advantages">Почему мы</a></li>
                    <li><a href="#request">Оставить заявку</a></li>
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
                        <p><a href="mainto:example@yandex.ru">example@yandex.ru</a></p>
                    </div>
                </div>

                <div class="footer__socials">
                    <img class="footer__socials-icon" src="./images/Logo.svg" alt="">
                    <img class="footer__socials-icon" src="./images/Logo.svg" alt="">
                    <img class="footer__socials-icon" src="./images/Logo.svg" alt="">
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

</body>
</html>

<?php
    unset($_SESSION['errors']);
    unset($_SESSION['old_data']);
?>