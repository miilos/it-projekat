<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Milos Popovic">
    <meta name="description" content="Stranica o muzici za projekat iz internet tegnologija">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Muzika | Projekat</title>
</head>
<body>
    <?php
        include "navbar.php";
        return_navbar(3);
        
        include "phone_menu.php";
        return_menu(3);
    ?>

    <section class="intro">
        <div class="intro__content">
            <h1 class="intro__content-title">Moji omiljeni <br>žanrovi: </h1>
            <button class="btn btn--secondary intro__content-btn">Pokaži</button>
        </div>
    </section>

    <section class="genre rock">
        <h1 class="genre__title genre__title--rock">Rock 'n' Roll</h1>

        <div class="ranking">
            <h2 class="ranking-title">Omiljene pesme:</h2>
            <ul class="ranking-list">
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">1.</p>
                    <p class="ranking-list-item__name">Alive</p>
                    <p class="ranking-list-item__subtitle">Pearl Jam</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">2.</p>
                    <p class="ranking-list-item__name">Ima Nas</p>
                    <p class="ranking-list-item__subtitle">Goblini</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">3.</p>
                    <p class="ranking-list-item__name">Bold as Love</p>
                    <p class="ranking-list-item__subtitle">Jimi Hendrix</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">4.</p>
                    <p class="ranking-list-item__name">Echoes</p>
                    <p class="ranking-list-item__subtitle">Pink Floyd</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">5.</p>
                    <p class="ranking-list-item__name">Ten Years Gone</p>
                    <p class="ranking-list-item__subtitle">Led Zeppelin</p>
                </li>
            </ul>
        </div>

        <div class="genre__pictures">
            <div class="genre__pictures-container genre__pictures-container--1">
                <div class="genre__pictures-container-img">
                    <a id='Ts08W4lcQ_9_CJx5AaGo_w' class='gie-single' href='http://www.gettyimages.com/detail/84894709' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block; width:100px; height:100px;'>Embed from Getty Images </a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'Ts08W4lcQ_9_CJx5AaGo_w',sig:'urLHcao974ehEQ3X1VuWOXRQLyLjUVEp60hI9NJrGlU=',w:'200px',h:'200px',items:'84894709',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="genre__pictures-container genre__pictures-container--2">
                <div class="genre__pictures-container-img">
                    <a id='diasPlwRSn1dk7SbZJ2t1Q' class='gie-single' href='http://www.gettyimages.com/detail/77700197' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'diasPlwRSn1dk7SbZJ2t1Q',sig:'napOj3T-jqfGqy797O3iEF1Wg0jp29V6hO0znikrV-o=',w:'200px',h:'200px',items:'77700197',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="genre__pictures-container genre__pictures-container--3">
                <div class="genre__pictures-container-img">
                    <a id='a6-MQIL0Qi5HxdAiF8pwmQ' class='gie-single' href='http://www.gettyimages.com/detail/864346968' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'a6-MQIL0Qi5HxdAiF8pwmQ',sig:'fhQZ1JwJwOqcnitEax4dW85EVF6gWzItHstHH9y6Gj0=',w:'200px',h:'200px',items:'864346968',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
        </div>

        <div class="ranking">
            <h2 class="ranking-title">Omiljeni albumi:</h2>
            <ul class="ranking-list">
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">1.</p>
                    <p class="ranking-list-item__name">U Magnovenju</p>
                    <p class="ranking-list-item__subtitle">Goblini</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">2.</p>
                    <p class="ranking-list-item__name">Ten</p>
                    <p class="ranking-list-item__subtitle">Pearl Jam</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">3.</p>
                    <p class="ranking-list-item__name">Abbey Road</p>
                    <p class="ranking-list-item__subtitle">The Beatles</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">4.</p>
                    <p class="ranking-list-item__name">Born to Run</p>
                    <p class="ranking-list-item__subtitle">Bruce Springsteen</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">5.</p>
                    <p class="ranking-list-item__name">London Calling</p>
                    <p class="ranking-list-item__subtitle">The Clash</p>
                </li>
            </ul>
        </div>

        <button class="btn btn--primary rock__next-btn genre__next-btn">
            <span class="material-symbols-outlined">
                arrow_downward
            </span>
        </button>
    </section>

    <section class="genre hiphop">
        <div class="ranking">
            <h2 class="ranking-title">Omiljene pesme:</h2>
            <ul class="ranking-list">
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">1.</p>
                    <p class="ranking-list-item__name">NY State of Mind</p>
                    <p class="ranking-list-item__subtitle">Nas</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">2.</p>
                    <p class="ranking-list-item__name">Survival Tactics</p>
                    <p class="ranking-list-item__subtitle">Joey Bada$$</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">3.</p>
                    <p class="ranking-list-item__name">Sing About Me, I'm Dying of Thirst</p>
                    <p class="ranking-list-item__subtitle">Kendrick Lamar</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">4.</p>
                    <p class="ranking-list-item__name">All Falls Down</p>
                    <p class="ranking-list-item__subtitle">Kanye West</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">5.</p>
                    <p class="ranking-list-item__name">Ex-Factor</p>
                    <p class="ranking-list-item__subtitle">Lauryn Hill</p>
                </li>
            </ul>
        </div>

        <h1 class="genre__title genre__title--hiphop">Hip-Hop</h1>

        <div class="ranking">
            <h2 class="ranking-title">Omiljeni albumi:</h2>
            <ul class="ranking-list">
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">1.</p>
                    <p class="ranking-list-item__name">The Forever Story</p>
                    <p class="ranking-list-item__subtitle">JID</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">2.</p>
                    <p class="ranking-list-item__name">To Pimp a Butterfly</p>
                    <p class="ranking-list-item__subtitle">Kendrick Lamar</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">3.</p>
                    <p class="ranking-list-item__name">The Miseducation of Lauryn Hill</p>
                    <p class="ranking-list-item__subtitle">Lauryn Hill</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">4.</p>
                    <p class="ranking-list-item__name">KIDS SEE GHOSTS</p>
                    <p class="ranking-list-item__subtitle">KIDS SEE GHOSTS</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">5.</p>
                    <p class="ranking-list-item__name">Blond</p>
                    <p class="ranking-list-item__subtitle">Frank Ocean</p>
                </li>
            </ul>
        </div>

        <div class="genre__pictures">
            <div class="genre__pictures-container genre__pictures-container--1">
                <div class="genre__pictures-container-img">
                <a id='N3WKhYfdQ7JMuPYQlDTucA' class='gie-single' href='http://www.gettyimages.com/detail/494815868' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'N3WKhYfdQ7JMuPYQlDTucA',sig:'Hmyvbw08nq2rssrHcvqRFbk8pwu0lj2WBFnUCYO946I=',w:'200px',h:'200px',items:'494815868',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="genre__pictures-container genre__pictures-container--2">
                <div class="genre__pictures-container-img">
                <a id='z58d1buQRaZT4jnMOZ10Qw' class='gie-single' href='http://www.gettyimages.com/detail/1402667129' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'z58d1buQRaZT4jnMOZ10Qw',sig:'8cU4EnXbPqkXsxQAMTsni6YE0odT7bcprAQJkKP8ohI=',w:'200px',h:'200px',items:'1402667129',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="genre__pictures-container genre__pictures-container--3">
                <div class="genre__pictures-container-img">
                <a id='cEkP8ZiEQIpw1GXd9Kz89A' class='gie-single' href='http://www.gettyimages.com/detail/81579668' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'cEkP8ZiEQIpw1GXd9Kz89A',sig:'Ah2FWwARhcENdK3DlKhG4UeN-zNqpp1dQvLv9a3C_ig=',w:'200px',h:'200px',items:'81579668',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
        </div>

        <button class="btn btn--primary hiphop__next-btn genre__next-btn">
            <span class="material-symbols-outlined">
                arrow_downward
            </span>
        </button>
    </section>

    <section class="genre indie">
        <h1 class="genre__title genre__title--rock">Indie</h1>

        <div class="ranking">
            <h2 class="ranking-title">Omiljene pesme:</h2>
            <ul class="ranking-list">
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">1.</p>
                    <p class="ranking-list-item__name">Sinking Ship</p>
                    <p class="ranking-list-item__subtitle">The Backseat Lovers</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">2.</p>
                    <p class="ranking-list-item__name">Reptilia</p>
                    <p class="ranking-list-item__subtitle">The Strokes</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">3.</p>
                    <p class="ranking-list-item__name">Mind Mischief</p>
                    <p class="ranking-list-item__subtitle">Tame Impala</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">4.</p>
                    <p class="ranking-list-item__name">Gravity Blues</p>
                    <p class="ranking-list-item__subtitle">Geese</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">5.</p>
                    <p class="ranking-list-item__name">The Fall</p>
                    <p class="ranking-list-item__subtitle">Flipturn</p>
                </li>
            </ul>
        </div>

        <div class="genre__pictures">
            <div class="genre__pictures-container genre__pictures-container--1">
                <div class="genre__pictures-container-img">
                    <a id='MmWU8E5iT5dM6QVF-3opvA' class='gie-single' href='http://www.gettyimages.com/detail/183495826' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'MmWU8E5iT5dM6QVF-3opvA',sig:'O6kEFrDk5rAg8izj38miB9q72_NrJ9V3vjrDPQlJ5Do=',w:'200px',h:'200px',items:'183495826',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="genre__pictures-container genre__pictures-container--2">
                <div class="genre__pictures-container-img">
                    <a id='0HZ0gIsuSG5CTzcM5bc6Aw' class='gie-single' href='http://www.gettyimages.com/detail/1645792310' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'0HZ0gIsuSG5CTzcM5bc6Aw',sig:'R6Qg_YQfx2V9E2RLi7wGRqNeFmvxAZteLuAZ_t-YJgA=',w:'200px',h:'200px',items:'1645792310',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="genre__pictures-container genre__pictures-container--3">
                <div class="genre__pictures-container-img">
                    <a id='VvKBJyuXTBxpyuhD0ny2Ew' class='gie-single' href='http://www.gettyimages.com/detail/1415502004' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'VvKBJyuXTBxpyuhD0ny2Ew',sig:'s-yyaXG__RYMs3BKAbOFDD4F5HSJwVkEe5y8bESSQCE=',w:'200px',h:'200px',items:'1415502004',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
        </div>

        <div class="ranking">
            <h2 class="ranking-title">Omiljeni albumi:</h2>
            <ul class="ranking-list">
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">1.</p>
                    <p class="ranking-list-item__name">When We Were Friends</p>
                    <p class="ranking-list-item__subtitle">The Backseat Lovers</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">2.</p>
                    <p class="ranking-list-item__name">Currents</p>
                    <p class="ranking-list-item__subtitle">Tame Impala</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">3.</p>
                    <p class="ranking-list-item__name">Lush</p>
                    <p class="ranking-list-item__subtitle">Snail Mail</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">4.</p>
                    <p class="ranking-list-item__name">Pony</p>
                    <p class="ranking-list-item__subtitle">Rex Orange County</p>
                </li>
                <li class="ranking-list-item">
                    <p class="ranking-list-item__number">5.</p>
                    <p class="ranking-list-item__name">Charm</p>
                    <p class="ranking-list-item__subtitle">Clairo</p>
                </li>
            </ul>
        </div>
    </section>

    <script src="./js/phoneMenu.js"></script>
    <script src="./js/scroll.js"></script>
</body>
</html>