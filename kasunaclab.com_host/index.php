<?php
include 'header.php';
?>
    <main>
      <section class="classer">
        <div class="container">
          <div class="classer__content">
            <div class="classer__body">
              <h1 class="classer__title">
                Play <span>gambling</span> without spending
              </h1>
              <p class="classer__descleimer">
                <span>The games offered on the site do not give users a chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                for users over the age of 18.
              </p>
              <a class="classer__link" href="#games">
                Play
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
            Games
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                Play
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Play
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Play
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="say" id="about">
        <div class="container">
          <h2 class="say__title">
            Free games
          </h2>
          <p class="say__text">
            Introducing completely free games. Our collection includes games that can be used to play in an instant with
            no download, no registration and no deposit. In order to play for pleasure in the presented games, the user
            is not required to provide personal or payment information. Our collection of free games where you can get
            an in-game bonus round with free spins. Those who want to play for fun often opt for browser games because
            they don't require your computer to download any software. In addition, due to the development of browser
            games and the general speed of the Internet, there are rarely connection problems or browser lag.
            When you play games on the computer, you can choose from two ways to play. You can either install the
            software on your computer or play game through your browser instantly without waiting. The latter often does
            not require downloading and registration, which is beneficial for a number of reasons.
          </p>
          <div class="say__images">
            <div class="say__image">
              <picture><source srcset="./img/about-1.webp"type="image/webp"><img src="./img/about-1.png" alt="Image"></picture>
            </div>
            <div class="say__image">
              <picture><source srcset="./img/about-2.webp"type="image/webp"><img src="./img/about-2.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="ylik" id="benefits">
        <div class="container">
          <ul class="ylik__list">
            <li class="ylik__item">
              <span class="ylik__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <p class="ylik__text">
                Play our games absolutely free and have fun. Your account in the game is replenished automatically and
                you can continue playing.
              </p>
            </li>
            <li class="ylik__item">
              <span class="ylik__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <p class="ylik__text">
                The game is available to you absolutely everywhere and at any time, our games are available on all
                convenient gadgets.
              </p>
            </li>
            <li class="ylik__item">
              <span class="ylik__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <p class="ylik__text">
                Modern animation and sound effects, enjoy the modern presentation of games and immerse yourself in the
                atmosphere.
              </p>
            </li>
            <li class="ylik__item">
              <span class="ylik__icon">
                <img src="./img/icon-4.svg" alt="Icon">
              </span>
              <p class="ylik__text">
                Downloading is not required, all you need is to choose any free game that you like directly on our
                website.
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on the
            button you confirm your age.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <a class="popup__button" href="main.php">Agree</a>
        </form>
      </div>
      </div>
      <?php
      include 'footer.php';
      ?>