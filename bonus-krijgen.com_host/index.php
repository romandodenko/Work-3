<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__top">
            <div class="hero__body">
              <span class="hero__span">
                Speel helemaal gratis!
              </span>
              <h1 class="hero__title">
                Gratis spelletjes voor vrije tijd
              </h1>
              <div class="hero__links">
                <a class="hero__link hero__link_1" href="#games">
                  Nu afspelen
                </a>
                <a class="hero__link hero__link_2" href="#about">
                  Over ons
                </a>
              </div>
            </div>
            <div class="hero__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
          </div>
          <p class="hero__descleimer">
            <span>De spellen die op de site worden aangeboden, geven gebruikers niet de kans om echt geld te
              winnen.</span>
            De site biedt gebruikers geen vaardigheden die kunnen worden gebruikt bij echt gokken. De spellen zijn
            beschikbaar voor gebruikers vanaf 18 jaar.
          </p>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title title">
            Onze spellen
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-1.php">
                  Riches of Robin
                </a>
                <a class="games__play" href="game-1.php">
                  Toneelstuk
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-2.php">
                  Shamrock Holmes
                </a>
                <a class="games__play" href="game-2.php">
                  Toneelstuk
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-3.php">
                  Emerald King Rainbow Road
                </a>
                <a class="games__play" href="game-3.php">
                  Toneelstuk
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title title">
            Onze voordelen
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h3 class="benefits__subtitle">
                Leuk en gratis
              </h3>
              <p class="benefits__text">
                Als je lid wordt, kun je honderden spellen voor de lol uitproberen - zonder enige financiële
                verplichting.
                Zodat u zich kunt concentreren op het plezier hebben.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h3 class="benefits__subtitle">
                Strak en betaalbaar
              </h3>
              <p class="benefits__text">
                Onze spellen zijn beschikbaar op alle apparaten. Als je naar de statistieken kijkt, komt het meeste geld
                dat deze sites verdienen van mobiele gebruikers.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h3 class="benefits__subtitle">
                Kleurrijke gokautomaten
              </h3>
              <p class="benefits__text">
                Hier vind je de meest kleurrijke spellen met verschillende karakters en super graphics. Haal visueel
                plezier uit het spel.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title">
            Over ons
          </h2>
          <h3 class="about__subtitle">
            Top gratis spellen
          </h3>
          <p class="about__text">
            Ben je op zoek naar een manier om gratis games te spelen zonder dat je software hoeft te downloaden? De
            oplossing is simpel: ga gewoon naar onze website en speel een van de gratis spellen die daar in je browser
            worden vermeld. Er zijn gewoon heel veel gokautomaten om van te genieten.
            Zoals in werkelijkheid bieden we onze spelers veel verschillende gokautomaten. Gratis spellen kunnen door
            iedereen over de hele wereld worden gespeeld, zelfs op plaatsen waar echt gokken verboden is.
          </p>
          <p class="about__text">
            Zolang de speler verbonden is met internet en niet van plan is om voor echt geld te spelen, kan hij of zij
            gratis spellen spelen. Er zijn geen voorwaarden en je hoeft niet eens een account te registreren om gratis
            games te spelen.Er zijn veel manieren waarop gamers kunnen profiteren van gratis games, en een groeiend
            aantal over de hele wereld biedt de mogelijkheid om hun games gratis en zonder enig risico te spelen. Het
            enige wat je nodig hebt om te spelen en plezier te hebben, is internettoegang, en het maakt niet uit of deze
            toegang afkomstig is van een lokaal netwerk of via een mobiel netwerk.
          </p>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Onze games zijn bedoeld voor een VOLWASSEN publiek van 18 jaar en ouder. Door op de knop te klikken bevestig je je leeftijd.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <a class="popup__button" href="main.php">Mee eens zijn</a>
        </form>
      </div>
      </div>
      <?php
      include 'footer.php';
      ?>