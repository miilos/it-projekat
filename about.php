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
    <title>O meni | Projekat</title>
  </head>
  <body>
    <?php 
      include('./phone_menu.php');
      return_menu(1);

      include('./navbar.php');
      return_navbar(1);
    ?>

    <main class="container">
      <section class="info-container general-info">
        <img
          src="./img/IMG_8723.JPG"
          alt="maturska slika"
          class="general-info__img"
        />

        <div class="general-info__text">
          <h1 class="header--main header--main--emphasized">Miloš Popović</h1>

          <table class="general-info__text__table">
            <tr>
              <td><b>Datum rođenja: </b></td>
              <td>28.10.2004.</td>
            </tr>
            <tr>
              <td><b>Mesto: </b></td>
              <td>Bačka Topola</td>
            </tr>
            <tr>
              <td><b>Email: </b></td>
              <td>milos.pop.004@gmail.com</td>
            </tr>
          </table>
        </div>
      </section>

      <section class="info-container bio">
        <h1 class="header--main header--main--emphasized-secondary">Bio</h1>

        <div class="bio__text">
          <p>
            Rođen sam 28.10.2004. godine. Živim u Bačkoj Topoli, a tokom nedelje
            sam u studentskom domu u Subotici. Završio sam IT smer u Tehničkoj
            školi "Ivan Sarić" u Subotici, i trenutno sam na drugoj godini
            studija na VTŠ-u, na smeru Informatika.
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
            reprehenderit fugiat eius placeat beatae error in magni voluptatibus
            amet commodi temporibus nemo recusandae inventore vel aliquid quis,
            animi quibusdam, laboriosam consequatur repellendus dolorem
            repudiandae. Officia maxime inventore quam sapiente minima earum
            fugiat tempora explicabo, exercitationem, illum accusamus a quas
            dicta.
          </p>
        </div>
      </section>
    </main>

    <script src="./js/phoneMenu.js"></script>
  </body>
</html>
