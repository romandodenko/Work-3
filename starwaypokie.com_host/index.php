<?php
include 'header.php';
?>
    <main>
      <section class="isterainter">
        <div class="container">
          <div class="isterainter__content">
            <div class="isterainter__body">
              <h1 class="isterainter__title">
                The best free entertainment
              </h1>
              <p class="isterainter__text">
                Welcome to the free games site. On this site you will find many free games that are constantly being
                added.
              </p>
              <a class="isterainter__link" href="#games">
                Play now
              </a>
            </div>
            <p class="isterainter__descleimer">
              The games offered on the site do not give users the opportunity to win real money.
              The site does not provide users with skills that can be used in real gambling. Games are available to
              users over 18 years of age.
            </p>
          </div>
        </div>
      </section>
      <section class="elefan" id="benefits">
        <div class="container">
          <ul class="elefan__list">
            <li class="elefan__item">
              <span class="elefan__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h2 class="elefan__title">
                Play without downloads
              </h2>
              <p class="elefan__text">
                Games do not require downloads, accessing from any device, play only with a stable Internet connection.
              </p>
            </li>
            <li class="elefan__item">
              <span class="elefan__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h2 class="elefan__title">
                Excellent graphics
              </h2>
              <p class="elefan__text">
                Exciting characters in all games, detailed drawing of all elements and colorful and bright images
              </p>
            </li>
            <li class="elefan__item">
              <span class="elefan__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="elefan__title">
                Play anywhere
              </h2>
              <p class="elefan__text">
                The site is available around the clock, and there are no obstacles to the game, a stable internet is
                enough.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="hames" id="games">
        <div class="container">
          <ul class="hames__list">
            <li class="hames__item">
              <div class="hames__image">
                <a href="game-1.php">
                  <picture>
                    <source srcset="./img/game-1.webp" type="image/webp"><img src="./img/game-1.jpg" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="hames__link" href="game-1.php">
                Madame Destiny Megaways
              </a>
              <a class="hames__play" href="game-1.php">
                Play
                <span>
                  <img src="./img/play.svg" alt="Play">
                </span>
              </a>
            </li>
            <li class="hames__item">
              <div class="hames__image">
                <a href="game-2.php">
                  <picture>
                    <source srcset="./img/game-2.webp" type="image/webp"><img src="./img/game-2.png" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="hames__link" href="game-2.php">
                Alchemy fortunes
              </a>
              <a class="hames__play" href="game-2.php">
                Play
                <span>
                  <img src="./img/play.svg" alt="Play">
                </span>
              </a>
            </li>
            <li class="hames__item">
              <div class="hames__image">
                <a href="game-3.php">
                  <picture>
                    <source srcset="./img/game-3.webp" type="image/webp"><img src="./img/game-3.jpg" alt="Image">
                  </picture>
                </a>
              </div>
              <a class="hames__link" href="game-3.php">
                The Catfather Part II
              </a>
              <a class="hames__play" href="game-3.php">
                Play
                <span>
                  <img src="./img/play.svg" alt="Play">
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="qeq" id="about">
        <div class="container">
          <div class="qeq__body">
            <h2 class="qeq__title">
              Free entertainment
            </h2>
            <p class="qeq__text">
              Welcome to the game portal! We hope to be your number one choice for your entertainment and the richest
              and most experienced source of adventure games. We've got the latest industry news with fresh guides and
              the best free deals. In addition, you can get extended and comprehensive information about common game
              strategies that you could learn and, of course, tips and advice on game strategies.The player's search
              ends right here with a huge library of games that are completely free to play.
            </p>
            <p class="qeq__text">
              All of our games are available and do not require a download for quick access; it is so simple! Play it,
              rate it and comment on it and see which games are quickly becoming the most popular in the industry by
              those who know best.
            </p>
          </div>
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
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Agree</a>
          </div>
        </form>
      </div>
    </div>
<?php
include 'footer.php';
?>