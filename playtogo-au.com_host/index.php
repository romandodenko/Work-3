<?php
include 'header.php';
?>
      <div class="page__body">
        <main>
          <section class="gero">
            <div class="container">
              <div class="gero__content">
                <div class="gero__body">
                  <span class="gero__span">
                    The best of the best entertainment
                  </span>
                  <h1 class="gero__title">
                    The best playground for fun free games
                  </h1>
                  <div class="gero__links">
                    <a class="gero__link gero__link_1" href="#games">
                      Play
                    </a>
                    <a class="gero__link gero__link_2" href="#about">
                      About Us
                    </a>
                  </div>
                </div>
                <p class="gero__descleimer">
                  <span>The games offered on the site do not give users the chance to win real money.</span>
                  The site does not provide users with skills that can be used in real gambling. The games are available
                  to users over 18 years of age.
                </p>
              </div>
            </div>
          </section>
          <section class="benefits" id="benefits">
            <div class="container">
              <ul class="benefits__list">
                <li class="benefits__item benefits__item_1">
                  <h2 class="benefits__title">
                    Registration is not required
                  </h2>
                  <p class="benefits__text">
                    There is no need to register on our website, you are not asked for your details. Just go to our
                    website and choose the right game
                  </p>
                </li>
                <li class="benefits__item benefits__item_2">
                  <h2 class="benefits__title">
                    Free games
                  </h2>
                  <p class="benefits__text">
                    No need to deposit your funds, our games run on a virtual account and do not require any investment.
                    The account is replenished automatically
                  </p>
                </li>
                <li class="benefits__item benefits__item_3">
                  <h2 class="benefits__title">
                    Play around the clock
                  </h2>
                  <p class="benefits__text">
                    You have no time limits, you can play all day long without stopping. Our site is available around
                    the clock, unlike classic clubs.
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="us" id="about">
            <div class="container">
              <div class="us__content">
                <h2 class="us__title">
                  About Us
                </h2>
                <div class="us__body">
                  <div class="us__column">
                    <p class="us__text">
                      Free games work in the same way as real money games, but with two obvious differences. The game is
                      free to play and you will not be able to cash out your virtual winnings. You will be able to
                      access a huge selection of popular games as well as the latest releases and even a few obscure
                      games. Discover everything from simple fruit games with 3 reels and one payline to the most
                      extravagant games with cutting edge animations and incredible bonus games. There is something for
                      everyone, even if you've never played before.
                    </p>
                  </div>
                  <div class="us__column">
                    <p class="us__text">
                      If you are new to the gaming world, it makes sense to play for free. It's a great way to get to
                      know the games. Even though games don't have a big learning curve, why make even a modest
                      financial commitment without trying them first? The gameplay is identical whether you play for
                      free or for real money. Why not play games without risk? Free games without deposit will help you.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="beze" id="games">
            <div class="container">
              <ul class="beze__list">
                <li class="beze__item">
                  <div class="beze__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Game"></picture>
                    </a>
                  </div>
                  <a class="beze__link" href="game-1.php">
                    The Faces of Freya
                  </a>
                </li>
                <li class="beze__item">
                  <div class="beze__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
                    </a>
                  </div>
                  <a class="beze__link" href="game-2.php">
                    The Green Knight
                  </a>
                </li>
                <li class="beze__item">
                  <div class="beze__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
                    </a>
                  </div>
                  <a class="beze__link" href="game-3.php">
                    Dragon Kingdom eyes of fire
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