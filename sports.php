<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milos Popovic">
    <meta name="description" content="Stranica o sportu za projekat iz internet tegnologija">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Sport | Projekat</title>
</head>
<body>
    <?php
        include "navbar.php";
        return_navbar(5);

        include "phone_menu.php";
        return_menu(5);
    ?>

    <section class="sport basketball">
        <h1 class="header header--main header--main--emphasized">Košarka</h1>

        <div class="sport__content">
            <div class="sport__court sport__court--basketball">
                <div class="basketball-wrapper-x">
                    <div class="basketball-wrapper-y">
                        <span class="material-symbols-outlined basketball">
                            sports_basketball
                        </span>
                    </div>
                </div>
    
                <p class="basketball-x basketball-x--1">x</p>
                <p class="basketball-x basketball-x--2">x</p>
                <p class="basketball-x basketball-x--3">x</p>
            </div>

            <div class="sport__text">
                <p class="sport__text-p">
                    Košarka je moj omiljeni sport. Počeo sam da treniram u prvom razredu osnovne, i prestao u šestom. Tada sam ujedno i prestao da pratim čitav sport. Međutim, u četvrtom razredu srednje sam odgledao nekoliko utakmica i setio se zašto volim košarku.
                    Od tada, svake nedelje pratim utakmice Evrolige, a od aprila do juna, pokušavam da ispratim svaku NBA playoff utakmicu.
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente amet eos quas, maiores vel culpa rerum repellat nemo tenetur, quos voluptatum quo aliquid provident esse atque animi debitis expedita ipsa consequatur illum? Rem soluta tempore voluptatum, officia blanditiis velit magnam sapiente quasi eum, deleniti rerum adipisci ex. Quaerat, sunt libero.
                </p>
            </div>
        </div>
    </section>

    <section class="sport football">
        <h1 class="header header--main header--main--emphasized">Američki fudbal</h1>

        <div class="sport__content">
            <div class="sport__court sport__court--football">
                <div class="football-wrapper--x">
                    <div class="football-wrapper--y">
                        <span class="material-symbols-outlined">
                            sports_football
                        </span>
                    </div>
                </div>

                <p class="football-x football-x--1">x</p>
                <p class="football-x football-x--2">x</p>
            </div>

            <div class="sport__text">
                <p class="sport__text-p">
                    Američki fudbal sam počeo da pratim na početku sezone 2023/24, i koji je već posle prve utakmice koju sam odgledao postao moj drugi omiljeni sport. Od tada je postala tradicija da pratim multiprenos utakmica svakog kola nedeljom uveče. Iako je tempo utakmica često mnogo sporiji od košarke, završnice mečeva su uglavnom napetije u NFL-u, posebno ako je u pitanju playoff.
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente amet eos quas, maiores vel culpa rerum repellat nemo tenetur, quos voluptatum quo aliquid provident esse atque animi debitis expedita ipsa consequatur illum? Rem soluta tempore voluptatum, officia blanditiis velit magnam sapiente quasi eum, deleniti rerum adipisci ex. Quaerat, sunt libero.
                </p>
            </div>
        </div>
    </section>

    <script src="./js/phoneMenu.js"></script>
</body>
</html>