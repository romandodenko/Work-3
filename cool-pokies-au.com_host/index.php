<?php
include 'header.php';
?>
<div class="page__bottom">
  <main>
    <section class="top">
      <div class="container">
        <div class="top__content">
          <a class="top__logo" href="main.php">
            <img src="./img/logo.svg" alt="Logo">
          </a>
        </div>
      </div>
    </section>
    <section class="unique">
      <div class="container">
        <div class="unique__content">
          <div class="unique__body">
            <p class="unique__descleimer">
              <span>The games offered on the site do not give users the chance to win real money.</span>
              The site does not provide users with skills that can be used in real gambling. The games are
              available to users over 18 years of age.
            </p>
            <h1 class="unique__title">
              Unique slot machines <span>in your spare time</span>
            </h1>
            <a class="unique__link" href="#games">
              Play
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="holf" id="benefits">
      <div class="container">
        <ul class="holf__list">
          <li class="holf__item">
            <div class="holf__top">
              <div class="holf__wrapper-icon">
                <span class="holf__icon"><img src="./img/icon-1.svg" alt="Icon"></span>
              </div>
              <h2 class="holf__title">
                Games do not cause addictions
              </h2>
            </div>
            <p class="holf__text">
              Games do not require any contributions and investments, all games are free and do not accept real
              money
            </p>
          </li>
          <li class="holf__item">
            <div class="holf__top">
              <div class="holf__wrapper-icon">
                <span class="holf__icon"><img src="./img/icon-2.svg" alt="Icon"></span>
              </div>
              <h2 class="holf__title">
                Excellent graphics
              </h2>
            </div>
            <p class="holf__text">
              All games on our site are modern and have excellent graphics and sound.
            </p>
          </li>
          <li class="holf__item">
            <div class="holf__top">
              <div class="holf__wrapper-icon">
                <span class="holf__icon"><img src="./img/icon-3.svg" alt="Icon"></span>
              </div>
              <h2 class="holf__title">
                Games are available at any time
              </h2>
            </div>
            <p class="holf__text">
              Unlike conventional gaming halls, games on our site are available anytime and anywhere.
            </p>
          </li>
        </ul>
      </div>
    </section>
    <section class="arthur" id="games">
      <div class="container">
        <ul class="arthur__list">
          <li class="arthur__item">
            <div class="arthur__image">
              <a href="game-1.php">
                <picture>
                  <source srcset="./img/game-1.webp" type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
              </a>
            </div>
            <div class="arthur__descr">
              <a class="arthur__link" href="game-1.php">
                The Green Knight
              </a>
              <a class="arthur__play" href="game-1.php">
                <img src="./img/play.svg" alt="Play">
              </a>
            </div>
          </li>
          <li class="arthur__item">
            <div class="arthur__image">
              <a href="game-2.php">
                <picture>
                  <source srcset="./img/game-2.webp" type="image/webp"><img src="./img/game-2.png" alt="Game"></picture>
              </a>
            </div>
            <div class="arthur__descr">
              <a class="arthur__link" href="game-2.php">
                Arthur’s Gold
              </a>
              <a class="arthur__play" href="game-2.php">
                <img src="./img/play.svg" alt="Play">
              </a>
            </div>
          </li>
          <li class="arthur__item">
            <div class="arthur__image">
              <a href="game-3.php">
                <picture>
                  <source srcset="./img/game-3.webp" type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
              </a>
            </div>
            <div class="arthur__descr">
              <a class="arthur__link" href="game-3.php">
                Lord Merlin and the Lady of the Lake
              </a>
              <a class="arthur__play" href="game-3.php">
                <img src="./img/play.svg" alt="Play">
              </a>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="tyrok" id="about">
      <div class="container">
        <div class="tyrok__content">
          <div class="tyrok__descr">
            <h2 class="tyrok__title">
              Free games for your leisure
            </h2>
            <p class="tyrok__text">
              Free slot machines make it possible to play in a casino without registering and replenishing an
              account. Absolutely all slots are available in a free mode, in which you do not need to use money.
              This means that players can play without financial risks!
            </p>
            <div class="tyrok__item">
              <p class="tyrok__text">
                The slots have the same graphics and features as real money slots, but it is impossible to lose
                money in them. Free slot machines are available from every software developer. The user just needs
                to go to the casino website, hover over the slot they like and select its demo version. Most
                casinos do not require you to register an account to play for free.
              </p>
            </div>
          </div>
          <div class="tyrok__image" data-da=".tyrok__item, 1220, 1">
            <picture>
              <source srcset="./img/about.webp" type="image/webp"><img src="./img/about.png" alt="Image"></picture>
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
          <picture>
            <source srcset="./img/popup.webp" type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
        </div>
        <div class="popup__descr">
          <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking
            on the
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
        </div>
      </form>
    </div>
  </div>
<?php
 include 'footer.php';
?>