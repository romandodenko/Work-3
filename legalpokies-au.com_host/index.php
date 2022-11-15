<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                The best top games absolutely free
              </h1>
              <p class="hero__descleimer">
                <span>The games offered on the site do not give users a chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                for users over the age of 18.
              </p>
              <a class="hero__link" href="#games">
                Play now
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="tikva" id="benefits">
        <div class="container">
          <ul class="tikva__list">
            <li class="tikva__item">
              <span class="tikva__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h2 class="tikva__title">
                No registration
              </h2>
              <p class="tikva__text">
                Modern sites allow you to play anonymously if you play for fun. This means you don't even need to create
                an account. Just go and play as a guest.
              </p>
            </li>
            <li class="tikva__item">
              <span class="tikva__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h2 class="tikva__title">
                No download
              </h2>
              <p class="tikva__text">
                Games are available instantly on numerous sites, so play right in your favorite browser without
                cluttering your hard drive with cumbersome programs.
              </p>
            </li>
            <li class="tikva__item">
              <span class="tikva__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h2 class="tikva__title">
                No deposit
              </h2>
              <p class="tikva__text">
                Play no deposit games and don't spend a dime. Try different games, enjoy spinning the colorful reels and
                try to hit the jackpot just for fun.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                Testament
              </a>
              <a class="games__play" href="game-1.php">
                Play
                <img src="./img/play.svg" alt="Play">
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Halloween Jackpot
              </a>
              <a class="games__play" href="game-2.php">
                Play
                <img src="./img/play.svg" alt="Play">
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Helloween
              </a>
              <a class="games__play" href="game-3.php">
                Play
                <img src="./img/play.svg" alt="Play">
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
          </div>
          <div class="about__descr">
            <h2 class="about__title">
              Free gambling
            </h2>
            <p class="about__text">
              The sites offer many benefits to the players. It is unlikely that you will ever find a stationary gaming
              establishment, where thousands of games are available at any time. Meanwhile, this is exactly what modern
              sites offer. You don't have to stand in line if someone else is playing the game of your choice. In
              virtual halls, several players can play the same game at the same time, and this does not affect his work
              or results.
            </p>
            <p class="about__text">
              Another advantage of electronic games is the possibility of free play. No real game will let you play for
              free. While playing, you can play for fun. Right now, all world hits are available to everyone without a
              deposit and without registration! Why not try them out in fun mode? In the end, you have nothing to lose
              as you don't even need to open an account to start playing.
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
          <a class="popup__button" href="main.php">Agree</a>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>