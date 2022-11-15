<?php
include 'header.php';
?>
    <main>
      <section class="io">
        <div class="container">
          <div class="io__content">
            <div class="io__body">
              <h1 class="io__title">
                Start playing free games without download instantly
              </h1>
              <a class="io__link" href="#games">
                Play Now
              </a>
              <p class="io__descleimer">
                <span>The games offered on the site do not give users a chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                for users over the age of 18.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="yo" id="benefits">
        <div class="yo__container container">
          <ul class="yo__list">
            <li class="yo__item">
              <h2 class="yo__title">
                Graphics and themes of games
              </h2>
              <p class="yo__text">
                If you like powerful graphics and sound effects, try free games that offer such visual enjoyment.
              </p>
            </li>
            <li class="yo__item">
              <h2 class="yo__title">
                No financial risks
              </h2>
              <p class="yo__text">
                Games are played with virtual chips. Even if they run out, you don't have to pay anything.
              </p>
            </li>
            <li class="yo__item">
              <h2 class="yo__title">
                Gaining experience.
              </h2>
              <p class="yo__text">
                It doesn't matter if you play for real money or for fun - the rules of the game remain the same. This
                allows beginners to practice before placing real bets.
              </p>
            </li>
          </ul>
          <div class="yo__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="jo" id="about">
        <div class="jo__container container">
          <div class="jo__column">
            <h2 class="jo__title">
              About our site
            </h2>
            <p class="jo__text">
              Our site has become one of the best places to play games for free. You can not only play for free, but
              also get extra pleasure in daily game tournaments. Every day for the daily tournament, a new game is
              offered that you can win. It is free to play on our site, but if you win the jackpot, you will not be able
              to collect it.All of our games are not downloadable and you do not need to register an account. You will
              find a huge number of game titles.
            </p>
          </div>
          <div class="jo__column">
            <p class="jo__text">
              Gambling providers offer several games. All of them are available to players in free mode. They can be
              played for free without registration and making a deposit. For bets, virtual chips are used, which
              eliminates the risks, and everyone has the opportunity to play free games just for fun. On our site you
              can find the most popular games that you can play for free. Free games give you the same gameplay and
              payouts as regular games, but you don't have to risk a dime. Of course, you get credit instead of real
              money at the end of the game.
            </p>
          </div>
        </div>
      </section>
      <section class="go" id="games">
        <div class="container">
          <ul class="go__list">
            <li class="go__item go__item_1">
              <div class="go__descr">
                <a class="go__link" href="game-1.php">
                  Atlantean Treasures
                </a>
                <a class="go__play" href="game-1.php">
                  Play now
                </a>
              </div>
            </li>
            <li class="go__item go__item_2">
              <div class="go__descr">
                <a class="go__link" href="game-2.php">
                  Ocean’s Treasure
                </a>
                <a class="go__play" href="game-2.php">
                  Play now
                </a>
              </div>
            </li>
            <li class="go__item go__item_3">
              <div class="go__descr">
                <a class="go__link" href="game-3.php">
                  Release the Kraken
                </a>
                <a class="go__play" href="game-3.php">
                  Play now
                </a>
              </div>
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