<?php
include 'header.php';
?>
    <main>
      <section class="blocher">
        <div class="container">
          <div class="blocher__content">
            <div class="blocher__body">
              <h1 class="blocher__title">
                The best place for entertainment
              </h1>
              <p class="blocher__text">
                Play here and now and don't worry about money, all entertainment is free
              </p>
              <a class="blocher__link" href="#games">
                Watch games
                <img src="./img/arrow.svg" alt="Arrow">
              </a>
            </div>
            <p class="blocher__descleimer">
              <span>The games offered on the site do not give users the chance to win real money.</span>
              The site does not provide users with skills that can be used in real gambling. The games are available to
              users over 18 years of age.
            </p>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title title">
            Our <span>games</span>
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image game"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-1.php">
                  Jungle Gorilla
                </a>
                <a class="games__play" href="game-1.php">
                  Play
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image game"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-2.php">
                  Mystic Shrine
                </a>
                <a class="games__play" href="game-2.php">
                  Play
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image game"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-3.php">
                  Mystery of Eldorado
                </a>
                <a class="games__play" href="game-3.php">
                  Play
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="uppa" id="benefits">
        <div class="container">
          <h2 class="uppa__title title">
            Our <span>advantages</span>
          </h2>
          <ul class="uppa__list">
            <li class="uppa__item">
              <span class="uppa__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <p class="uppa__text">
                The big advantage of game is simplicity. Unlike other gambling games, you do not have to learn the rules
                for a long time and read the best strategies. You can start playing immediately.
              </p>
            </li>
            <li class="uppa__item">
              <span class="uppa__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <p class="uppa__text">
                Apart from simplicity, free no deposit game are also attractive in terms of visual processing and game
                elements.
              </p>
            </li>
            <li class="uppa__item">
              <span class="uppa__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <p class="uppa__text">
                Play now whenever you have taste and time. You play from the comfort of your own home.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title">
            <span>About</span> Us
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <p class="about__text">
                The fascinating world of gambling amazes players with a variety of gaming opportunities. People can find
                a way to play different games, and of course there is the option to play for free.
              </p>
              <p class="about__text">
                Most gambling establishments offer free games to every user around the clock and regardless of location.
                If the player has no intention of losing money, then this is a great way to play free games. At the same
                time, there are no additional conditions, and the user can play them without registration and
                downloading.
              </p>
              <div class="about__item">
                <div class="about__texts">
                  <p class="about__text">
                    Free games are more of a demo mode where users try them out for the first time before placing a real
                    money bet. Of course, the level of excitement is relatively less than in gambling for real money,
                    but
                    this also has its advantages, which we will discuss later.
                  </p>
                  <p class="about__text">
                    Gambling is developing in big steps. Every day, many new games are released that are compatible with
                    different platforms. In addition, players can use mobile phones, tablets and other devices to play
                    on
                    the desktop. Along with this development, a wide variety of free game types are available. The point
                    is freedom of choice - everyone is sure to find something.
                  </p>
                </div>
              </div>
            </div>
            <div class="about__image" data-da=".about__item, 768, 1">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>