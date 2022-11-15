<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="funny">
            <div class="container">
              <div class="funny__content">
                <div class="funny__body">
                  <span class="funny__span">
                    Come and visit us and play
                  </span>
                  <h1 class="funny__title">
                    <span>the best fun games</span> for free
                  </h1>
                  <div class="funny__links">
                    <a class="funny__link funny__link_1" href="#games">
                      Play
                    </a>
                    <a class="funny__link funny__link_2" href="#games">
                      About Us
                    </a>
                  </div>
                  <p class="funny__descleimer">
                    <span>The games offered on the site do not give users a chance to win real money.</span>
                    The site does not provide users with skills that can be used in real gambling. The games are
                    available for users over the age of 18.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="benq" id="benefits">
            <div class="container">
              <ul class="benq__list">
                <li class="benq__item">
                  <div class="benq__wrapper-icon">
                    <span class="benq__icon">
                      <img src="./img/icon.svg" alt="Icon">
                    </span>
                  </div>
                  <h2 class="benq__title">
                    You do not need to register and download the application.
                  </h2>
                  <p class="benq__text">
                    The absence of mandatory registration is due to the fact that the user does not need to replenish
                    the account for a free game.
                  </p>
                </li>
                <li class="benq__item">
                  <div class="benq__wrapper-icon">
                    <span class="benq__icon">
                      <img src="./img/icon.svg" alt="Icon">
                    </span>
                  </div>
                  <h2 class="benq__title">
                    No deposit required.
                  </h2>
                  <p class="benq__text">
                    Users play games for free coins provided by the administration of the gambling site. Since there is
                    no need to replenish the account, it is impossible to lose real money.
                  </p>
                </li>
                <li class="benq__item">
                  <div class="benq__wrapper-icon">
                    <span class="benq__icon">
                      <img src="./img/icon.svg" alt="Icon">
                    </span>
                  </div>
                  <h2 class="benq__title">
                    There is no requirement to provide personal information.
                  </h2>
                  <p class="benq__text">
                    There is no account registration, so the user does not need to provide email, name, place of
                    residence, and other information.
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="ysek" id="about">
            <div class="container">
              <h2 class="ysek__title">
                About Us
              </h2>
              <div class="ysek__content">
                <div class="ysek__descr">
                  <p class="ysek__text">
                    Games have always been the most popular around the world, and even today they enjoy unprecedented
                    popularity. Every day, millions of people around the world try their luck in games.
                  </p>
                  <p class="ysek__text">
                    The principle of the games is simple, and this is their main attraction. A free game is a machine
                    that consists of several reels located next to each other, on which there are various symbols. When
                    a button is pressed or a lever is pulled, the rollers rotate. As soon as the reels stop, you will
                    see a combination of symbols. If this combination is among the winning ones, the slot machine will
                    immediately pay you your winnings.
                  </p>
                </div>
                <div class="ysek__images">
                  <div class="ysek__image">
                    <picture><source srcset="./img/about-1.webp"type="image/webp"><img src="./img/about-1.png" alt="Image"></picture>
                  </div>
                  <div class="ysek__image">
                    <picture><source srcset="./img/about-2.webp"type="image/webp"><img src="./img/about-2.png" alt="Image"></picture>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="slots" id="games">
            <div class="container">
              <ul class="slots__list">
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-1.php">
                    Madame Ink
                  </a>
                  <a class="slots__play" href="game-1.php">
                    Play
                  </a>
                </li>
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-2.php">
                    Caishen’s arrival
                  </a>
                  <a class="slots__play" href="game-2.php">
                    Play
                  </a>
                </li>
                <li class="slots__item">
                  <div class="slots__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="slots__link" href="game-3.php">
                    Magic Tree
                  </a>
                  <a class="slots__play" href="game-3.php">
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