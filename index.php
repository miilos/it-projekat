<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milos Popovic">
    <meta name="description" content="Start page za projekat iz internet tegnologija">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Welcome | Projekat</title>
</head>
<body>
    <header class="home-header">
        <h1 class="header--main header--main--emphasized">Dobrodošli!</h1>
        <h2 class="header--sub">
            <?php
            echo "danas je: " . date("d.m.Y.");
            ?>
        </h2>
    </header>

    <main class="menu-container">
        <div class="menu">
            <div class="menu__item menu__item--1">
                <a class="menu__item-title" href="./about.php">O meni</a>
                <span class="material-symbols-outlined">
                    person
                </span>
            </div>
            <div class="menu__item menu__item--2">
                <a class="menu__item-title" href="./sites.php">Omiljene stranice</a>
                <span class="material-symbols-outlined">
                    language
                </span>
            </div>
            <div class="menu__item menu__item--3">
                <a class="menu__item-title" href="./music.php">Muzika</a>
                <span class="material-symbols-outlined">
                    music_note
                </span>
            </div>
            <div class="menu__item menu__item--4">
                <a class="menu__item-title" href="./books.php">Omiljene knjige</a>
                <span class="material-symbols-outlined">
                    book_2
                </span>
            </div>
            <div class="menu__item menu__item--5">
                <a class="menu__item-title" href="./sports.php">Sport</a>
                <span class="material-symbols-outlined">
                    sports_basketball
                </span>
            </div>
            <div class="menu__item menu__item--6">
                <a class="menu__item-title" href="./projects.php">Projekti</a>
                <span class="material-symbols-outlined">
                    tab
                </span>
            </div>
            <div class="menu__item menu__item--7">
                <a class="menu__item-title" href="#">Item 7</a>
                <span class="material-symbols-outlined">
                    language
                </span>
            </div>
        </div>
    </main>
</body>
</html>