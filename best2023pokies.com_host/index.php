<?php
include 'header.php';
?>
    <main>
      <section class="gero">
        <div class="container">
          <div class="gero__content">
            <div class="gero__body">
              <h1 class="gero__title">
                Exciting games for free and without registration
              </h1>
              <a class="gero__link" href="#games">
                Play now
              </a>
              <p class="gero__descleimer">
                <span>The games offered on the site do not give users a chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                for users over the age of 18.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="content__body">
          <div class="games" id="games">
            <div class="container">
              <h2 class="games__title">
                Games
              </h2>
              <ul class="games__list">
                <li class="games__item games__item_1">
                  <div class="games__descr">
                    <a class="games__link" href="game-1.php">
                      Tarzan and the jewels of opar
                    </a>
                    <a class="games__play" href="game-1.php">
                      Play
                    </a>
                  </div>
                </li>
                <li class="games__item games__item_2">
                  <div class="games__descr">
                    <a class="games__link" href="game-2.php">
                      Congi Cash
                    </a>
                    <a class="games__play" href="game-2.php">
                      Play
                    </a>
                  </div>
                </li>
                <li class="games__item games__item_3">
                  <div class="games__descr">
                    <a class="games__link" href="game-3.php">
                      Win-A-Beest
                    </a>
                    <a class="games__play" href="game-3.php">
                      Play
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="about" id="about">
            <div class="container">
              <h2 class="about__title">
                About Us
              </h2>
              <div class="about__content">
                <div class="about__descr">
                  <p class="about__text">
                    Once again, welcome to the best gaming platform, where there are many free games that you can play
                    to earn cool emotes. Gone are the days when games were only available offline as they can now be
                    played anywhere, anytime.
                  </p>
                  <div class="about__item">
                    <p class="about__text">
                      Games are always played for two main reasons. Therefore, if you want to play free games, this is
                      the best place to do it without any worries.
                      The games come in all shapes and sizes, although the base game and gameplay are the same. Whether
                      it's penny games, classic games or free Vegas games. Here you will find the games of your choice -
                      no need to take risks. Sit back and enjoy the free version of the games. In addition, you can use
                      various mechanisms to enjoy them.
                    </p>
                  </div>
                </div>
                <div class="about__image" data-da=".about__item, 991, 1">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </div>
          <div class="benefits" id="benefits">
            <div class="container">
              <h2 class="benefits__title">
                Advantages
              </h2>
              <ul class="benefits__list">
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h3 class="benefits__subtitle">
                    Free entertainment
                  </h3>
                  <p class="benefits__text">
                    All games on our site are absolutely unlimited, the virtual account is updated automatically
                  </p>
                </li>
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/icon-2.svg" alt="Icon">
                  </span>
                  <h3 class="benefits__subtitle">
                    Play around the clock
                  </h3>
                  <p class="benefits__text">
                    Games on the site are available day and night, you can easily play all the games without
                    interruption.
                  </p>
                </li>
                <li class="benefits__item">
                  <span class="benefits__icon">
                    <img src="./img/icon-3.svg" alt="Icon">
                  </span>
                  <h3 class="benefits__subtitle">
                    Free entertainment
                  </h3>
                  <p class="benefits__text">
                    Our games are available anytime and anywhere on your gadgets
                  </p>
                </li>
              </ul>
            </div>
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
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Agree</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>