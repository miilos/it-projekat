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
            <h1 class="intro__content-title">Moji omiljeni <br>zanrovi: </h1>
            <button class="btn btn--secondary intro__content-btn">Pokazi</button>
        </div>
    </section>

    <section class="rock">
        <h1 class="rock__title">Rock 'n' Roll</h1>

        <div class="rock__songs">
            <h2 class="rock__songs-title">Omiljene pesme:</h2>
            <ul class="rock__songs-list">
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">1.</p>
                    <p class="rock__songs-list-item__song">Alive</p>
                    <p class="rock__songs-list-item__band">Pearl Jam</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">2.</p>
                    <p class="rock__songs-list-item__song">Ima Nas</p>
                    <p class="rock__songs-list-item__band">Goblini</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">3.</p>
                    <p class="rock__songs-list-item__song">Bold as Love</p>
                    <p class="rock__songs-list-item__band">Jimi Hendrix</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">4.</p>
                    <p class="rock__songs-list-item__song">Echoes</p>
                    <p class="rock__songs-list-item__band">Pink Floyd</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">5.</p>
                    <p class="rock__songs-list-item__song">Ten Years Gone</p>
                    <p class="rock__songs-list-item__band">Led Zeppelin</p>
                </li>
            </ul>
        </div>

        <div class="rock__pictures">
            <div class="rock__pictures-container rock__pictures-container--1">
                <div class="rock__pictures-container-img">
                    <a id='Ts08W4lcQ_9_CJx5AaGo_w' class='gie-single' href='http://www.gettyimages.com/detail/84894709' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block; width:100px; height:100px;'>Embed from Getty Images </a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'Ts08W4lcQ_9_CJx5AaGo_w',sig:'urLHcao974ehEQ3X1VuWOXRQLyLjUVEp60hI9NJrGlU=',w:'200px',h:'200px',items:'84894709',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="rock__pictures-container rock__pictures-container--2">
                <div class="rock__pictures-container-img">
                    <a id='diasPlwRSn1dk7SbZJ2t1Q' class='gie-single' href='http://www.gettyimages.com/detail/77700197' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'diasPlwRSn1dk7SbZJ2t1Q',sig:'napOj3T-jqfGqy797O3iEF1Wg0jp29V6hO0znikrV-o=',w:'200px',h:'200px',items:'77700197',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
            <div class="rock__pictures-container rock__pictures-container--3">
                <div class="rock__pictures-container-img">
                    <a id='a6-MQIL0Qi5HxdAiF8pwmQ' class='gie-single' href='http://www.gettyimages.com/detail/864346968' target='_blank' style='color:#a7a7a7;text-decoration:none;font-weight:normal !important;border:none;display:inline-block;'>Embed from Getty Images</a><script>window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'a6-MQIL0Qi5HxdAiF8pwmQ',sig:'fhQZ1JwJwOqcnitEax4dW85EVF6gWzItHstHH9y6Gj0=',w:'200px',h:'200px',items:'864346968',caption: true ,tld:'com',is360: false })});</script><script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
                </div>
            </div>
        </div>

        <div class="rock__songs">
            <h2 class="rock__songs-title">Omiljeni albumi:</h2>
            <ul class="rock__songs-list">
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">1.</p>
                    <p class="rock__songs-list-item__song">U Magnovenju</p>
                    <p class="rock__songs-list-item__band">Goblini</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">2.</p>
                    <p class="rock__songs-list-item__song">Ten</p>
                    <p class="rock__songs-list-item__band">Pearl Jam</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">3.</p>
                    <p class="rock__songs-list-item__song">Abbey Road</p>
                    <p class="rock__songs-list-item__band">The Beatles</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">4.</p>
                    <p class="rock__songs-list-item__song">Born to Run</p>
                    <p class="rock__songs-list-item__band">Bruce Springsteen</p>
                </li>
                <li class="rock__songs-list-item">
                    <p class="rock__songs-list-item__number">5.</p>
                    <p class="rock__songs-list-item__song">London Calling</p>
                    <p class="rock__songs-list-item__band">The Clash</p>
                </li>
            </ul>
        </div>
    </section>

    <script src="./js/phoneMenu.js"></script>
    <script src="./js/scroll.js"></script>
</body>
</html>