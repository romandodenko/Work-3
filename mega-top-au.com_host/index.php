<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="top">
            <div class="container">
              <a class="top__logo" href="main.php">
                <img src="./img/logo.svg" alt="Logo">
              </a>
            </div>
          </section>
          <section class="neny">
            <div class="container">
              <div class="neny__content">
                <div class="neny__body">
                  <span class="neny__span">
                    Best games
                  </span>
                  <h1 class="neny__title">
                    Play games in good quality
                  </h1>
                  <p class="neny__descleimer">
                    <span>The games offered on the site do not give users the chance to win real money.</span>
                    The site does not provide users with skills that can be used in real gambling. The games are
                    available to users over 18 years of age.
                  </p>
                  <a class="neny__link" href="#games">
                    Play now
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="benefits" id="benefits">
            <div class="container">
              <ul class="benefits__list">
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h2 class="benefits__title">
                    Without registering
                  </h2>
                  <p class="benefits__text">
                    You do not need to register to play our games. Just choose the game you like
                  </p>
                </li>
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/icon-2.svg" alt="Icon">
                  </span>
                  <h2 class="benefits__title">
                    No downloads
                  </h2>
                  <p class="benefits__text">
                    To play our games you do not need to pay any funds, all games are free
                  </p>
                </li>
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/icon-3.svg" alt="Icon">
                  </span>
                  <h2 class="benefits__title">
                    No risk
                  </h2>
                  <p class="benefits__text">
                    To play our games you do not need to pay any funds, all games are free
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="slots" id="games">
            <div class="container">
              <h2 class="slots__title">
                Free games
              </h2>
              <ul class="slots__list">
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-1.php">
                    Play
                    <img src="./img/arrow.svg" alt="Arrow">
                  </a>
                </li>
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-2.php">
                    Play
                    <img src="./img/arrow.svg" alt="Arrow">
                  </a>
                </li>
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-3.php">
                    Play
                    <img src="./img/arrow.svg" alt="Arrow">
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="about__container container">
              <div class="about__descr">
                <h2 class="about__title">
                  About Us
                </h2>
                <p class="about__text">
                  In the modern world, a lot is changing and improving, but games are developing especially rapidly.
                  More recently, simple, accessible "one-armed bandits" that stood in all ground-based halls and amused
                  lucky people with simple fruits, now they are full-fledged, amazingly realistic computer free games in
                  which you can not only have a good time.
                </p>
                <h3 class="about__subtitle">
                  Games to play for free
                </h3>
                <p class="about__text">
                  It only took twenty years for games to change. In the 21st century, playing every game of good quality
                  has become both more profitable and interesting, and much safer. Recently, each emulator has a special
                  free version that allows you to run the reels without investments, and in the real modes of "one-armed
                  bandits" gamblers are now entertained not only by simple cherries, sevens and strawberries, but by
                  full-fledged, well-designed characters, who have at their disposal all sorts of multipliers and
                  bonuses.
                </p>
              </div>
              <div class="about__images">
                <div class="about__image">
                  <picture><source srcset="./img/about-1.webp"type="image/webp"><img src="./img/about-1.png" alt="Image"></picture>
                </div>
                <div class="about__image">
                  <picture><source srcset="./img/about-2.webp"type="image/webp"><img src="./img/about-2.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </section>
        </main>
        <div class="popup">
          <div class="popup__close"></div>
          <div class="popup__body">
            <form class="popup__form" action="/">
              <div class="popup__image">
                <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
              </div>
              <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on
                the
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