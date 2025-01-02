<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milos Popovic">
    <meta name="description" content="Stranica o gitari za projekat iz internet tehnologija">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Gitara | Projekat</title>
</head>
<body>
    <?php
        include "navbar.php";
        return_navbar(7);

        include "phone_menu.php";
        return_menu(7);
    ?>

    <div class="guitar-container">
        <div class="guitar">
            <figure class="guitar__video-container">
                <video class="guitar__video" controls>
                    <source src="./img/bold-as-love-cover-short.mp4">
    
                    <p>Error loading video</p>
                </video>

                <figcaption class="guitar__video-container__caption">
                    Cover "Bold As Love" od Jimija Hendrixa
                </figcaption>
            </figure>

            <p class="guitar__p">
                Gitara je oduvek bila moj omiljeni instrument. Uklapa se u praktično svaki žanr muzike, ali se nigde ne uklapa bolje nego u rok, gde se vidi i to da je najekspresivniji instrument. Počeo sam da sviram 2020. tokom pandemije, kada sam bio slobodan većinu dana. Počeo sam na najjeftinijoj klasičnoj gitari koju sam mogao da nađem i od tada sam provodio skoro cele dane svirajući. Svirati pesme koje slušam godinama je poseban osećaj. Par godina kasnije sam prešao na električnu gitaru, i jedno vreme svirao skoro isključivo električnu, ali u se u poslednje vreme sve više vraćam na akustičnu gitaru.
            </p>

            <svg class="guitar__wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 270" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(66, 63, 53, 1)" offset="0%"></stop><stop stop-color="rgba(66, 63, 53, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,162L30,175.5C60,189,120,216,180,229.5C240,243,300,243,360,234C420,225,480,207,540,193.5C600,180,660,171,720,162C780,153,840,144,900,126C960,108,1020,81,1080,90C1140,99,1200,144,1260,157.5C1320,171,1380,153,1440,153C1500,153,1560,171,1620,180C1680,189,1740,189,1800,184.5C1860,180,1920,171,1980,157.5C2040,144,2100,126,2160,126C2220,126,2280,144,2340,162C2400,180,2460,198,2520,180C2580,162,2640,108,2700,103.5C2760,99,2820,144,2880,144C2940,144,3000,99,3060,108C3120,117,3180,180,3240,207C3300,234,3360,225,3420,216C3480,207,3540,198,3600,171C3660,144,3720,99,3780,90C3840,81,3900,108,3960,99C4020,90,4080,45,4140,22.5C4200,0,4260,0,4290,0L4320,0L4320,270L4290,270C4260,270,4200,270,4140,270C4080,270,4020,270,3960,270C3900,270,3840,270,3780,270C3720,270,3660,270,3600,270C3540,270,3480,270,3420,270C3360,270,3300,270,3240,270C3180,270,3120,270,3060,270C3000,270,2940,270,2880,270C2820,270,2760,270,2700,270C2640,270,2580,270,2520,270C2460,270,2400,270,2340,270C2280,270,2220,270,2160,270C2100,270,2040,270,1980,270C1920,270,1860,270,1800,270C1740,270,1680,270,1620,270C1560,270,1500,270,1440,270C1380,270,1320,270,1260,270C1200,270,1140,270,1080,270C1020,270,960,270,900,270C840,270,780,270,720,270C660,270,600,270,540,270C480,270,420,270,360,270C300,270,240,270,180,270C120,270,60,270,30,270L0,270Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(146, 167, 140, 1)" offset="0%"></stop><stop stop-color="rgba(146, 167, 140, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,216L30,202.5C60,189,120,162,180,135C240,108,300,81,360,76.5C420,72,480,90,540,117C600,144,660,180,720,171C780,162,840,108,900,90C960,72,1020,90,1080,90C1140,90,1200,72,1260,54C1320,36,1380,18,1440,18C1500,18,1560,36,1620,67.5C1680,99,1740,144,1800,175.5C1860,207,1920,225,1980,225C2040,225,2100,207,2160,184.5C2220,162,2280,135,2340,144C2400,153,2460,198,2520,220.5C2580,243,2640,243,2700,207C2760,171,2820,99,2880,58.5C2940,18,3000,9,3060,18C3120,27,3180,54,3240,54C3300,54,3360,27,3420,36C3480,45,3540,90,3600,130.5C3660,171,3720,207,3780,193.5C3840,180,3900,117,3960,99C4020,81,4080,108,4140,117C4200,126,4260,117,4290,112.5L4320,108L4320,270L4290,270C4260,270,4200,270,4140,270C4080,270,4020,270,3960,270C3900,270,3840,270,3780,270C3720,270,3660,270,3600,270C3540,270,3480,270,3420,270C3360,270,3300,270,3240,270C3180,270,3120,270,3060,270C3000,270,2940,270,2880,270C2820,270,2760,270,2700,270C2640,270,2580,270,2520,270C2460,270,2400,270,2340,270C2280,270,2220,270,2160,270C2100,270,2040,270,1980,270C1920,270,1860,270,1800,270C1740,270,1680,270,1620,270C1560,270,1500,270,1440,270C1380,270,1320,270,1260,270C1200,270,1140,270,1080,270C1020,270,960,270,900,270C840,270,780,270,720,270C660,270,600,270,540,270C480,270,420,270,360,270C300,270,240,270,180,270C120,270,60,270,30,270L0,270Z"></path></svg>
        </div>
    </div>

    <script src="./js/phoneMenu.js"></script>
</body>
</html>