<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="many">
            <div class="container">
              <div class="many__head">
                <div class="many__body">
                  <span class="many__span">
                    Visit our site and get an unforgettable experience
                  </span>
                  <h1 class="many__title">
                    <span>Free games</span> with the best stories
                  </h1>
                </div>

                <div class="many__links">
                  <a class="many__link many__link_1" href="#games">
                    Play
                  </a>
                  <a class="many__link many__link_2" href="#about">
                    About Us
                  </a>
                </div>
              </div>
              <p class="many__descleimer">
                <span>The games offered on the site do not give users a chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                for users over the age of 18.
              </p>
            </div>
          </section>
          <section class="manyl" id="benefits">
            <div class="container">
              <ul class="manyl__list">
                <li class="manyl__item">
                  <div class="manyl__top">
                    <div class="manyl__wrapper-icon">
                      <span class="manyl__icon">
                        <img src="./img/icon-1.svg" alt="Icon">
                      </span>
                    </div>
                    <h3 class="manyl__title">
                      Slot machines work without registration and downloads
                    </h3>
                  </div>
                  <div class="manyl__bottom">
                    <p class="manyl__text">
                      We do not require account replenishment, so registration is not required. You don't need to
                      download anything, just start playing.
                    </p>
                  </div>
                </li>
                <li class="manyl__item">
                  <div class="manyl__top">
                    <div class="manyl__wrapper-icon">
                      <span class="manyl__icon">
                        <img src="./img/icon-1.svg" alt="Icon">
                      </span>
                    </div>
                    <h3 class="manyl__title">
                      Play without deposit
                    </h3>
                  </div>
                  <div class="manyl__bottom">
                    <p class="manyl__text">
                      You do not need to fund your account as the slots are free. You cannot win real money or prizes.
                    </p>
                  </div>
                </li>
                <li class="manyl__item">
                  <div class="manyl__top">
                    <div class="manyl__wrapper-icon">
                      <span class="manyl__icon">
                        <img src="./img/icon-1.svg" alt="Icon">
                      </span>
                    </div>
                    <h3 class="manyl__title">
                      Play from any device
                    </h3>
                  </div>
                  <div class="manyl__bottom">
                    <p class="manyl__text">
                      Don't limit yourself to just a computer, you can play anywhere on any convenient device, all you
                      need is our website and internet.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="usik" id="about">
            <div class="container">
              <h2 class="usik__title">
                About Us
                <span>
                  <img src="./img/icon-2.svg" alt="Icon">
                </span>
              </h2>
              <div class="usik__content">
                <div class="usik__descr">
                  <p class="usik__text">
                    Slots are the dominant type of games, as evidenced by their sheer number. There are currently
                    thousands of slots available, with more being added every day. However, you need to choose the best
                    if you are a true slots fan looking for an unforgettable gaming experience.
                  </p>
                  <p class="usik__text">
                    The process of playing free slot machines is quite simple. You need to study the rules and technical
                    characteristics of the slot, and then start playing. But Canadian users can play without a long
                    study of the rules, because there is no risk of losing real money. As a rule, you can play without a
                    deposit in a casino without any requirements. Slots are available without registration, downloading
                    the application and replenishing the account.
                  </p>
                </div>
                <div class="usik__images">
                  <div class="usik__image">
                    <picture><source srcset="./img/about-1.webp"type="image/webp"><img src="./img/about-1.png" alt="Image"></picture>
                  </div>
                  <div class="usik__image">
                    <picture><source srcset="./img/about-2.webp"type="image/webp"><img src="./img/about-2.png" alt="Image"></picture>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="play" id="games">
            <div class="container">
              <ul class="play__list">
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-1.php">
                    Reactoonz 2
                  </a>
                  <a class="play__play" href="game-1.php">
                    Play
                  </a>
                </li>
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-2.php">
                    Space Rocks
                  </a>
                  <a class="play__play" href="game-2.php">
                    Play
                  </a>
                </li>
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-3.php">
                    Madame Ink
                  </a>
                  <a class="play__play" href="game-3.php">
                    Play
                  </a>
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