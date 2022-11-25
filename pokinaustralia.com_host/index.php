<?php
include 'header.php';
?>
    <main>
      <section class="yo">
        <div class="container">
          <div class="yo__content">
            <div class="yo__body">
              <h1 class="yo__title">
                We welcome all players who like entertainment for free
              </h1>
              <p class="yo__descleimer">
                <span>The games offered on the site do not give users a chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                for users over the age of 18.
              </p>
              <a class="yo__link" href="#games">
                Play now
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="asakyra" id="benefits">
        <div class="container">
          <ul class="asakyra__list">
            <li class="asakyra__item">
              <h2 class="asakyra__title">
                Available on any device
              </h2>
              <p class="asakyra__text">
                You have the ability to play anytime, anywhere. Our website and games are available on all devices, all
                you need is a good internet connection and a stable connection
              </p>
            </li>
            <li class="asakyra__item">
              <h2 class="asakyra__title">
                No different from classic games
              </h2>
              <p class="asakyra__text">
                The trial version retains the features of the games, mechanics, rules, graphics. The gambler launches
                bonus levels and collects winning combinations.
              </p>
            </li>
            <li class="asakyra__item">
              <h2 class="asakyra__title">
                Play any game for free
              </h2>
              <p class="asakyra__text">
                Choose any game you like. We recommend that you first test the game you like in free mode.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="itan" id="about">
        <div class="itan__container container">
          <div class="itan__column">
            <h2 class="itan__title">
              Who we are
            </h2>
            <h3 class="itan__subtitle">
              Learn about our free entertainment
            </h3>
            <p class="itan__text">
              Most beginners find it difficult to immediately choose the right game. In this, you can trust the
              recommendations of professionals or choose time-tested games and play them. But it doesn't really matter
              which game you like: any emulator can be interesting.
            </p>
          </div>
          <div class="itan__column">
            <p class="itan__text">
              When choosing, it does not hurt to get acquainted with the reviews of game machines and their theoretical
              percentage of winnings.
              Playing free games is one of the main features that distinguish Internet resources from gaming clubs. Our
              site opens up more opportunities for gamblers. The main advantages of the format are the absence of
              mandatory registration and investment of own funds. In addition, for the game player, the free-version is
              a guarantee of privacy.
            </p>
            <p class="itan__text">
              The free mode of games, devices with cards and roulette is of interest to gamers not only in terms of
              entertainment. This format has other functions as well. For beginners, it allows you to get acquainted
              with the assortment.
            </p>
          </div>
        </div>
      </section>
      <section class="igraem" id="games">
        <div class="container">
          <ul class="igraem__list">
            <li class="igraem__item">
              <div class="igraem__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="igraem__link" href="game-1.php">
                Street Racer
              </a>
              <a class="igraem__play" href="game-1.php">
                Play
              </a>
            </li>
            <li class="igraem__item">
              <div class="igraem__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="igraem__link" href="game-2.php">
                Machina
              </a>
              <a class="igraem__play" href="game-2.php">
                Play
              </a>
            </li>
            <li class="igraem__item">
              <div class="igraem__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="igraem__link" href="game-3.php">
                Wildhound Derby
              </a>
              <a class="igraem__play" href="game-3.php">
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