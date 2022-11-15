<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Each player can visit the site and enjoy the game
              </h1>
              <p class="hero__descleimer">
                <span>The games offered on the site do not give users the chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                to users over 18 years of age.
              </p>
              <a class="hero__link" href="#games">
                Games
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title">
            Games
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                Play
                <img src="./img/arrow.svg" alt="Arrow">
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Play
                <img src="./img/arrow.svg" alt="Arrow">
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Play
                <img src="./img/arrow.svg" alt="Arrow">
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            About Us
          </h2>
          <p class="about__text">
            Everyone loves to play games: they are fun, simple and profitable. So, if you're just playing for fun or
            practice, free games are exactly what you need. At the same time, the principle “the more the better”
            applies. The site where you play free games should be able to offer you the best, latest and most popular
            games from the top developers in the industry. We do exactly that. We are the best free site on the internet
            and we have thousands of free games in our collection. You can play them for free, without registration and
            download. We offer a wide range from classic games to modern games and let you have fun without any
            restrictions. Keep reading to find out more!
          </p>
          <p class="about__text">
            To play games for free without registration, just go to the gambling club website, open the section and
            select any of them. It will open for free.
          </p>
          <ul class="about__list">
            <li class="about__image about__image_1">
              <picture><source srcset="./img/about-1.webp"type="image/webp"><img src="./img/about-1.png" alt="Image"></picture>
            </li>
            <li class="about__image about__image_2">
              <picture><source srcset="./img/about-2.webp"type="image/webp"><img src="./img/about-2.png" alt="Image"></picture>
            </li>
            <li class="about__image about__image_3">
              <picture><source srcset="./img/about-3.webp"type="image/webp"><img src="./img/about-3.png" alt="Image"></picture>
            </li>
          </ul>
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
                Quality Games
              </h2>
              <p class="benefits__text">
                New quality games with the best sound effects. Enjoy the gaming experience with modern games
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
                You don't need to download anything, just choose the right game. For the game you only need a good
                internet connection.
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Infinite balance
              </h2>
              <p class="benefits__text">
                The balance is replenished automatically. You do not need to open your account or deposit your own
                money.
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