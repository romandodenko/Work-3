<?php
include 'header.php';
?>
    <main>
      <section class="bolo">
        <div class="container">
          <div class="bolo__content">
            <div class="bolo__body">
              <span class="bolo__span">
                Greetings to all gamblers
              </span>
              <h1 class="bolo__title">
                Free entertainment and games
              </h1>
              <a class="bolo__link" href="#games">
                Watch games
                <span><img src="./img/play.svg" alt="Play"></span>
              </a>
            </div>
            <div class="bolo__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
            <p class="bolo__descleimer">
              <span>The games offered on the site do not give users the chance to win real money.</span>
              The site does not provide users with skills that can be used in real gambling. The games are available to
              users over 18 years of age.
            </p>
          </div>
        </div>
      </section>
      <section class="hollond" id="games">
        <div class="container">
          <h2 class="hollond__title">
            our <span>games</span>
          </h2>
          <ul class="hollond__list">
            <li class="hollond__item">
              <div class="hollond__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="hollond__descr">
                <a class="hollond__link" href="game-1.php">
                  Voodoo Magic
                </a>
                <a class="hollond__play" href="game-1.php">
                  play
                </a>
              </div>
            </li>
            <li class="hollond__item">
              <div class="hollond__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="hollond__descr">
                <a class="hollond__link" href="game-2.php">
                  Rabbit in the Hat
                </a>
                <a class="hollond__play" href="game-2.php">
                  play
                </a>
              </div>
            </li>
            <li class="hollond__item">
              <div class="hollond__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="hollond__descr">
                <a class="hollond__link" href="game-3.php">
                  Stacked
                </a>
                <a class="hollond__play" href="game-3.php">
                  play
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="dinik" id="benefits">
        <div class="container">
          <h2 class="dinik__title">
            Our <span>advantages</span>
          </h2>
          <ul class="dinik__list">
            <li class="dinik__item">
              <div class="dinik__wrapper-icon">
                <span class="dinik__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </span>
              </div>
              <p class="dinik__text">
                We treat all players with respect and try to make sure that everyone, when playing games, gets the maximum pleasure and immersed in the world of games.
              </p>
            </li>
            <li class="dinik__item">
              <div class="dinik__wrapper-icon">
                <span class="dinik__icon">
                  <img src="./img/icon-2.svg" alt="Icon">
                </span>
              </div>
              <p class="dinik__text">
                The balance in any game is replenished automatically, you do not need to deposit any money. Play unlimited any game on our website now
              </p>
            </li>
            <li class="dinik__item">
              <div class="dinik__wrapper-icon">
                <span class="dinik__icon">
                  <img src="./img/icon-3.svg" alt="Icon">
                </span>
              </div>
              <p class="dinik__text">
                For games, you do not need to enter your data, registration is not required. You don't need to download anything either, just launch the game and enjoy
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="finik" id="about">
        <div class="container">
          <h2 class="finik__title">
            <span>About</span> Us
          </h2>
          <ul class="finik__list">
            <li class="finik__item">
              <p class="finik__text">
                Gambling has always been popular. The age of the Internet has given players many new virtual pleasures. Virtual games are offered to play for free - without winnings, but without spending money. Such free games have their advantages.
              </p>
              <p class="finik__text">
                Most modern software platforms will definitely have some free games. But in the virtual world, the variety of games is huge. All gambling games that are presented, you can test in a free mode - including brand new ones released this year.
              </p>
            </li>
            <li class="finik__item">
              <p class="finik__text">
                For your convenience, all games listed on our site are available in any web browser. Unlike some old-fashioned platforms, here you don't need to download any additional software to be able to play on your computer. The only thing you need to make sure is that you are using a flash player that allows you to run games. However, this add-on is already integrated into almost every modern browser, so you shouldn't have any problems with it.
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
       <div class="popup__descr">
      <div class="popup__image">
              <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
            </div>
          <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on the
            button you confirm your age.</p></div>
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