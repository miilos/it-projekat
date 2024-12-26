<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milos Popovic">
    <meta name="description" content="Stranica o knjigama za projekat iz internet tegnologija">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Knjige | Projekat</title>
</head>
<body>
    <?php
        include "navbar.php";
        return_navbar(4);

        include "phone_menu.php";
        return_menu(4);
    ?>

    <div class="books__container">
        <div class="books__container-rating">
            <div class="books__container-rating-visible">
                <div class="books__container-rating__bar books__container-rating__bar--5"></div>
                <p class="books__container-rating__rating">5⭐</p>
            </div>

            <div class="ranking">
                <h2 class="ranking-title">5⭐ reads:</h2>
                <ul class="ranking-list">
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">1.</p>
                        <p class="ranking-list-item__name">Ime Vetra</p>
                        <p class="ranking-list-item__subtitle">Patrik Rotfus</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">2.</p>
                        <p class="ranking-list-item__name">Priča o Dva Grada</p>
                        <p class="ranking-list-item__subtitle">Ernest Hemingvej</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">3.</p>
                        <p class="ranking-list-item__name">Cveće za Aldžernona</p>
                        <p class="ranking-list-item__subtitle">Danijel Kiz</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">4.</p>
                        <p class="ranking-list-item__name">Zenica Sveta</p>
                        <p class="ranking-list-item__subtitle">Robert Džordan</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">5.</p>
                        <p class="ranking-list-item__name">Jedna Svanova Ljubav</p>
                        <p class="ranking-list-item__subtitle">Marsel Prust</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="books__container-rating">
            <div class="books__container-rating-visible">
                <div class="books__container-rating__bar books__container-rating__bar--4"></div>
                <p class="books__container-rating__rating">4⭐</p>
            </div>

            <div class="ranking">
                <h2 class="ranking-title">4⭐ reads:</h2>
                <ul class="ranking-list">
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">1.</p>
                        <p class="ranking-list-item__name">O Pisanju</p>
                        <p class="ranking-list-item__subtitle">Stiven King</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">2.</p>
                        <p class="ranking-list-item__name">Put Kraljeva</p>
                        <p class="ranking-list-item__subtitle">Brendon Sanderson</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">3.</p>
                        <p class="ranking-list-item__name">Crveno i Crno</p>
                        <p class="ranking-list-item__subtitle">Anri Bejl Stendal</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">4.</p>
                        <p class="ranking-list-item__name">Bitlsi</p>
                        <p class="ranking-list-item__subtitle">Hanter Dejvis</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">5.</p>
                        <p class="ranking-list-item__name">Buđenje Nemani</p>
                        <p class="ranking-list-item__subtitle">Džejms S. A. Kori</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="books__container-rating">
            <div class="books__container-rating-visible">
                <div class="books__container-rating__bar books__container-rating__bar--3"></div>
                <p class="books__container-rating__rating">3⭐</p>
            </div>

            <div class="ranking">
                <h2 class="ranking-title">3⭐ reads:</h2>
                <ul class="ranking-list">
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">1.</p>
                        <p class="ranking-list-item__name">Crossroads of Twilight</p>
                        <p class="ranking-list-item__subtitle">Robert Džordan</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">2.</p>
                        <p class="ranking-list-item__name">Bilo Jednom u Holivudu</p>
                        <p class="ranking-list-item__subtitle">Kventin Tarantino</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">3.</p>
                        <p class="ranking-list-item__name">Devet</p>
                        <p class="ranking-list-item__subtitle">Slavimir Futro</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">4.</p>
                        <p class="ranking-list-item__name">Izgnanstvo i Kraljevstvo</p>
                        <p class="ranking-list-item__subtitle">Alber Kami</p>
                    </li>
                    <li class="ranking-list-item">
                        <p class="ranking-list-item__number">5.</p>
                        <p class="ranking-list-item__name">Usamljeni Putnik</p>
                        <p class="ranking-list-item__subtitle">Džek Keruak</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="books__container-rating">
            <div class="books__container-rating-visible">
                <div class="books__container-rating__bar books__container-rating__bar--2"></div>
                <p class="books__container-rating__rating">2⭐</p>
            </div>
        </div>
        <div class="books__container-rating">
            <div class="books__container-rating-visible">
                <div class="books__container-rating__bar books__container-rating__bar--1"></div>
                <p class="books__container-rating__rating">1⭐</p>
            </div>
        </div>
    </div>

    <script src="./js/phoneMenu.js"></script>
</body>
</html>