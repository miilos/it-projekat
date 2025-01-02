<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milos Popovic">
    <meta name="description" content="Stranica o drugim projektima za projekat iz internet tehnologija">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Projekti | Projekat</title>
</head>
<body>
    <?php
        include "navbar.php";
        return_navbar(6);

        include "phone_menu.php";
        return_menu(6);
    ?>

    <div class="projects__container">
        <div class="projects">
            <div class="project sim-racing">
                <h1 class="project__title">Sim Racing</h1>

                <img src="./img/sim-racing.png" alt="screenshot sim racinga" class="project__img sim-racing__img">

                <p class="project__description">
                    Sim Racing je prvi veliki projekat koji sam napravio za projektnu nedelju u školi 2022. Korisnik je u bazu podataka mogao da dodaje vozila, koja su imala različite statistike u zavisnosti od tipa vozila koji je izabrao. Zatim je korisnik mogao da bira koja vozila učestvuju u trci i da bira stazu. Svaka staza je imala poseban color scheme i efekte tokom trke. Kada počne trku, korisnik je mogao da gleda tabelu i čita log trke koji se ažurirao u realnom vremenu. Takođe je mogao da izabere vozilo za koje je mislio da će biti pobednik. Na kraju svake trke, vozila su dobijala poene na osnovu plasmana i korisnik je mogao da gleda tabelu na posebnoj stranici posle svake trke.
                </p>

                <div class="languages">
                    <div class="language html">HTML</div>
                    <div class="language css">CSS</div>
                    <div class="language js">JavaScript</div>
                    <div class="language node">Node.js</div>
                    <div class="language express">Express</div>
                    <div class="language mongo">MongoDB</div>
                    <div class="language mongoose">Mongoose</div>
                    <div class="language pug">Pug</div>
                </div>

                <a href="https://github.com/miilos/Sim-Racing" target="_blank" class="github-btn">
                    <img src="./img/github.svg" alt="github logo" class="github-btn__img">
                    Github
                </a>
            </div>

            <div class="project mapster">
                <h1 class="project__title">Mapster</h1>

                <img src="./img/mapster.jpg" alt="screenshot mapstera" class="project__img mapster__img">

                <p class="project__description">
                    Mapster je društvena mreža koju sam napravio za projektnu nedelju 2023. Korisnici prilikom sign up-a svoju home lokaciju na mapi. Kada naparave account, mogu da prave postove (samo tekstualne), da lajkuju i komentarišu na drugim postovima i da zaprate druge korisnike. Međutim, za razliku od drugih društvenih mreža, svakom korisniku su vidljivi samo postovi i korisnici koji se nalaze u krugu od 30km od mesta koje je izabrano kao home lokacija.
                </p>

                <div class="languages">
                    <div class="language html">HTML</div>
                    <div class="language sass">Sass</div>
                    <div class="language js">JavaScript</div>
                    <div class="language node">Node.js</div>
                    <div class="language express">Express</div>
                    <div class="language mongo">MongoDB</div>
                    <div class="language mongoose">Mongoose</div>
                    <div class="language pug">Pug</div>
                </div>

                <a href="https://github.com/miilos/mapster" target="_blank" class="github-btn">
                    <img src="./img/github.svg" alt="github logo" class="github-btn__img">
                    Github
                </a>
            </div>
        </div>
    </div>

    <script src="./js/phoneMenu.js"></script>
</body>
</html>