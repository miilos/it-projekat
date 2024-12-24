<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Milos Popovic" />
    <meta
      name="description"
      content="About page za projekat iz internet tegnologija"
    />
    <meta name="robots" content="noindex,follow" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />
    <title>Omiljeni sajtovi | Projekat</title>
  </head>
  <body>
    <?php 
      include('./phone_menu.php');
      return_menu(2);

      include('./navbar.php');
      return_navbar(2);
    ?>

    <div class="sites-container">
      <div class="site">
        <div class="site-img site-img--1"></div>
        <h2 class="site-title">Delfi</h2>

        <div class="site-description">
          <a href="https://delfi.rs/" target="_blank" class="site-description__link">https://delfi.rs/</a>
          <p class="site-description__text">
            Od svih vecih domacih izdavackih kuca, Delfi ima najbolje dizajniran sajt,
            sa najboljim user experience-om, kao i najbolje online popuste. Zbog toga,
            kada narucujem knjige, narucujem ih skoro iskljucivo na ovom sajtu.
          </p>
        </div>

        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(66, 63, 53, 1)" offset="0%"></stop><stop stop-color="rgba(66, 63, 53, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,49L288,196L576,147L864,392L1152,49L1440,245L1728,98L2016,441L2304,392L2592,147L2880,392L3168,49L3456,49L3744,49L4032,343L4320,441L4608,0L4896,392L5184,49L5472,441L5760,196L6048,294L6336,392L6624,196L6912,245L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(146, 167, 140, 1)" offset="0%"></stop><stop stop-color="rgba(146, 167, 140, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,196L288,294L576,49L864,98L1152,196L1440,392L1728,441L2016,343L2304,49L2592,196L2880,196L3168,0L3456,49L3744,392L4032,294L4320,196L4608,49L4896,294L5184,245L5472,0L5760,98L6048,392L6336,392L6624,0L6912,196L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path></svg>
      </div>

      <div class="site">
        <div class="site-img site-img--2"></div>
        <h2 class="site-title">Storygraph</h2>
        
        <div class="site-description">
          <a href="https://thestorygraph.com/" target="_blank" class="site-description__link">https://thestorygraph.com/</a>
          <p class="site-description__text">
            Storygraph je aplikacija za logovanje knjiga i ostavljanje recenzija
            koji je glavni konkurent Goodreads-u. Koristim ga zbog toga sto takodje
            vodi statistiku o knjigama koje citam.
          </p>
        </div>

        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(66, 63, 53, 1)" offset="0%"></stop><stop stop-color="rgba(66, 63, 53, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,147L288,147L576,147L864,392L1152,294L1440,49L1728,98L2016,392L2304,441L2592,392L2880,441L3168,0L3456,98L3744,98L4032,441L4320,0L4608,392L4896,343L5184,0L5472,392L5760,49L6048,441L6336,392L6624,343L6912,392L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(146, 167, 140, 1)" offset="0%"></stop><stop stop-color="rgba(146, 167, 140, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,196L288,294L576,147L864,294L1152,441L1440,294L1728,441L2016,147L2304,196L2592,196L2880,49L3168,98L3456,441L3744,98L4032,245L4320,196L4608,147L4896,147L5184,441L5472,441L5760,49L6048,294L6336,0L6624,441L6912,343L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path></svg>
      </div>

      <div class="site">
        <div class="site-img site-img--3"></div>
        <h2 class="site-title">Spotify</h2>
        
        <div class="site-description">
          <a href="https://open.spotify.com/" target="_blank" class="site-description__link">https://open.spotify.com/</a>
          <p class="site-description__text">
            Spotify je jedan od najvecih streaming servisa na svetu, i streaming sajt koji koristim redovno.
          </p>
        </div>

        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(66, 63, 53, 1)" offset="0%"></stop><stop stop-color="rgba(66, 63, 53, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,245L288,98L576,196L864,49L1152,441L1440,196L1728,147L2016,392L2304,49L2592,343L2880,147L3168,294L3456,245L3744,245L4032,294L4320,294L4608,392L4896,196L5184,392L5472,98L5760,245L6048,343L6336,294L6624,196L6912,147L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(146, 167, 140, 1)" offset="0%"></stop><stop stop-color="rgba(146, 167, 140, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,392L288,147L576,245L864,98L1152,49L1440,294L1728,0L2016,49L2304,196L2592,0L2880,98L3168,245L3456,196L3744,343L4032,441L4320,0L4608,98L4896,294L5184,196L5472,441L5760,196L6048,294L6336,441L6624,343L6912,343L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path></svg>
      </div>
      <div class="site">
        <div class="site-img site-img--4"></div>
        <h2 class="site-title">Google fonts</h2>
        
        <div class="site-description">
          <a href="https://fonts.google.com/" target="_blank" class="site-description__link">https://fonts.google.com/</a>
          <p class="site-description__text">
            Google fonts je jedan od prvih sajtova koje otvaram kada pocnem da radim na bilo kom projektu.
            Osim fontova, ima i biblioteku ikonica koju je jako lako koristiti.
          </p>
        </div>

        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(66, 63, 53, 1)" offset="0%"></stop><stop stop-color="rgba(66, 63, 53, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,343L288,147L576,343L864,49L1152,245L1440,0L1728,392L2016,0L2304,392L2592,245L2880,294L3168,147L3456,441L3744,343L4032,294L4320,294L4608,294L4896,343L5184,196L5472,196L5760,343L6048,392L6336,245L6624,98L6912,392L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(146, 167, 140, 1)" offset="0%"></stop><stop stop-color="rgba(146, 167, 140, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,49L288,245L576,0L864,441L1152,196L1440,294L1728,441L2016,441L2304,392L2592,196L2880,294L3168,245L3456,147L3744,0L4032,196L4320,294L4608,392L4896,98L5184,245L5472,196L5760,98L6048,343L6336,294L6624,343L6912,98L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path></svg>
      </div>
      <div class="site">
        <div class="site-img site-img--5"></div>
        <h2 class="site-title">Youtube</h2>
        
        <div class="site-description">
          <a href="https://www.youtube.com/" target="_blank" class="site-description__link">https://www.youtube.com/</a>
          <p class="site-description__text">
            Isto kao i vecina drugih ljudi, gledam Youtube umesto TV-a.
          </p>
        </div>

        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(66, 63, 53, 1)" offset="0%"></stop><stop stop-color="rgba(66, 63, 53, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,49L288,49L576,245L864,441L1152,294L1440,343L1728,0L2016,0L2304,49L2592,245L2880,98L3168,441L3456,441L3744,441L4032,343L4320,294L4608,147L4896,441L5184,0L5472,196L5760,294L6048,98L6336,0L6624,98L6912,343L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(146, 167, 140, 1)" offset="0%"></stop><stop stop-color="rgba(146, 167, 140, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,196L288,98L576,147L864,245L1152,343L1440,196L1728,294L2016,98L2304,245L2592,0L2880,98L3168,147L3456,441L3744,343L4032,147L4320,392L4608,245L4896,294L5184,441L5472,343L5760,392L6048,0L6336,343L6624,147L6912,245L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path></svg>
      </div>
      <div class="site">
        <div class="site-img site-img--6"></div>
        <h2 class="site-title">Rd live</h2>
        
        <div class="site-description">
          <a href="https://rd-live.com/sports/basketball" target="_blank" class="site-description__link">https://rd-live.com/sports/basketball</a>
          <p class="site-description__text">
            Rd-live je jedan od najpouydanijih streaming sajtova koji prenosi sve utakmice najpopularnijih sportova. 
          </p>
        </div>

        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(66, 63, 53, 1)" offset="0%"></stop><stop stop-color="rgba(66, 63, 53, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,147L288,196L576,343L864,392L1152,245L1440,49L1728,343L2016,98L2304,0L2592,0L2880,245L3168,196L3456,245L3744,441L4032,343L4320,392L4608,245L4896,343L5184,147L5472,294L5760,49L6048,196L6336,147L6624,343L6912,343L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(146, 167, 140, 1)" offset="0%"></stop><stop stop-color="rgba(146, 167, 140, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,196L288,196L576,49L864,294L1152,147L1440,245L1728,196L2016,0L2304,343L2592,294L2880,98L3168,0L3456,196L3744,294L4032,294L4320,98L4608,245L4896,441L5184,343L5472,49L5760,98L6048,294L6336,0L6624,343L6912,98L6912,490L6624,490L6336,490L6048,490L5760,490L5472,490L5184,490L4896,490L4608,490L4320,490L4032,490L3744,490L3456,490L3168,490L2880,490L2592,490L2304,490L2016,490L1728,490L1440,490L1152,490L864,490L576,490L288,490L0,490Z"></path></svg>
      </div>
    </div>

    <script src="./js/phoneMenu.js"></script>
  </body>
</html>
