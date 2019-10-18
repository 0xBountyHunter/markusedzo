<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en" id="top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Raleway:400,700&display=swap" rel="stylesheet"> 
    <meta name="description" content="Személyi edzés Győr. Bízd egy profira az alakodat.">
    <title><?php echo $lang['title']?></title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <div class="header__nav--wrapper">
            <a href="#top" class="header__nav__logo text-md"><?php echo $lang['logo']?></a>
            <ul class="header__nav__list">
                <li class="header__nav__list__item"><a class="header__nav__list__link" href="index.php?lang=en"><?php echo $lang['eng'] ?></a>&nbsp;|&nbsp;<a class="header__nav__list__link" href="index.php?lang=hu"><?php echo $lang['hun']?></a></li>
                <li class="header__nav__list__item"><a class="header__nav__list__link" href="#about"><?php echo $lang['about']?></a></li>
                <li class="header__nav__list__item"><a class="header__nav__list__link" href="#contact"><?php echo $lang['contact']?></a></li>
            </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="home section">
            <div class="home__box" data-aos="fade-up">
                <div>
                    <p class="home__box__name"><?php echo $lang['name']?></p>
                    <h1 class="home__box__heading heading"><?php echo $lang['home-header']?></h1>
                </div>
                <a href="#secondary" class="home__cta cta"><?php echo $lang['cta']?></a>
            </div>
            
        </section>
        <section class="secondary section" id="secondary">
            <div class="wrapper">
                <div class="container"  data-aos="fade-in">
                    <h2 class="secondary__heading heading"><?php echo $lang['sec-header']?></h2>
                    <p class="secondary__para para"><?php echo $lang['sec-para']?></p>
                </div>
                <picture class="picture">
                    <img class="secondary__illustration illustration" src="img/illustrasions/healthy_habit.svg" alt="Illustration about working out. Source from unDraw.com">
                </picture>
            </div>
        </section>
        <section class="tertiary section" id="about">
            <h2 class="tertiary__heading heading"><?php echo $lang['ter-header']?></h2>
            <div class="tertiary__box">
                <picture class="picture tertiary__picture">
                    <img class="img tertiary__img" src="img/pictures/markus-big.jpg" alt="A picture about me!" class="tertiary__box__img">
                </picture>
                <div class="tertiary__box__text">
                    <p class="tertiary__name">Imre Márkus</p>
                    <p class="tertiary__para para"><?php echo $lang['ter-para']?></p>
                    <a href="#popup" class="tertiary__box__cta"><?php echo $lang['read']?></a>
                </div>
            </div>

            <div class="popup" id="popup">
                <div class="popup__content">
                    <div class="popup__left">
                        <img class="popup__img" src="img/pictures/before-after.jpg" alt="A picture about Márkus's transformation">
                    </div>
                    <div class="popup__right">
                        <a href="#about" class="popup__close">&times;</a>
                        <h2 class="heading popup__heading"><?php echo $lang['transformation']?></h2>
                        <p class="popup__para para"><?php echo $lang['transformation-para']?></p>
                    </div>
                </div>
            </div>

        </section>
        <section class="quaternary section" id="pricing">
            <div class="wrapper">
            <picture class="picture">
                <img class="quaternary__illustration illustration" src="img/illustrasions/credit_card.svg" alt="Illustration about paying with credit card. Source from unDraw.com">
            </picture>
            <div class="container" data-aos="fade-in">
            <h2 class="quaternary__heading heading"><?php echo $lang['qua-header']?></h2>
            <p class="quaternary__para para"><?php echo $lang['qua-para']?></p><br>
            <div class="quaternary__lists">
                <ul class="quaternary__list--1">
                    <li><?php echo $lang['li-1']?></li>
                    <li><?php echo $lang['li-2']?></li>
                    <li><?php echo $lang['li-3']?></li>
                    <li><?php echo $lang['li-4']?></li>
                </ul>
                <ul class="quaternary__list--2">
                    <li>3000Ft</li>
                    <li>27000Ft</li>
                    <li>14000Ft</li>
                    <li>27000Ft</li>
                </ul>
            </div>
            <p  class="quaternary__info"><?php echo $lang['sale']?></p>
            </div>
            </div>
        </section>
        <section class="contact section" id="contact">
            <div class="wrapper">
                <h2 class="contact__heading heading"><?php echo $lang['qui-header']?></h2>
                <a class="contact__link text-big" href="tel:+36703691271"><!-- <img class="contact__icon" src="img/icons/phone.svg" alt="Telephone icon"> -->+36 70 369 1271</a>
                <a class="contact__link text-big" href="mailto:markustraining21@gmail.com"><!-- <img class="contact__icon" src="img/icons/email.svg" alt="Email icon"> -->markustraining21@gmail.com</a>
                <a class="contact__link text-big" href="https://www.facebook.com/markusedzogyor" target="_blank"><!-- <img class="contact__icon" src="img/icons/facebook.svg" alt="Facebook icon"> -->markusedzogyor</a>
            </div>
        </section>

    </main>
    <footer class="footer">
        <p class="footer__copyright"><?php echo $lang['footer'] ?></p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>
</html>