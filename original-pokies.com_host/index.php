<?php
include 'header.php';
?>
    <main>
      <section class="colorful">
        <div class="container">
          <div class="colorful__content">
            <div class="colorful__body">
              <h1 class="colorful__title">
                Colorful slot machines
              </h1>
              <p class="colorful__descleimer">
                <span>The games offered on the site do not give users the chance to win real money.</span>
                The site does not provide users with skills that can be used in real gambling. The games are available
                to users over 18 years of age.
              </p>
              <a class="colorful__link" href="#games">
                Play now
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="with" id="benefits">
        <div class="with__container container">
          <ul class="with__list">
            <li class="with__item">
              <span class="with__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <div class="with__texts">
                <h2 class="with__title">
                  Slots with different storylines
                </h2>
                <p class="with__text">
                  Games with our slots will definitely not get bored, colorful and interesting stories will definitely
                  not let you get bored.
                </p>
              </div>
            </li>
            <li class="with__item">
              <span class="with__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <div class="with__texts">
                <h2 class="with__title">
                  Games are absolutely free
                </h2>
                <p class="with__text">
                  We do not require any investment from you, all games are absolutely free.
                </p>
              </div>
            </li>
            <li class="with__item">
              <span class="with__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <div class="with__texts">
                <h2 class="with__title">
                  No download required
                </h2>
                <p class="with__text">
                  All slots are freely available, access 24/7. For a good game, you only need the Internet.
                </p>
              </div>
            </li>
          </ul>
          <div class="with__image">
            <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="playing" id="games">
        <div class="container">
          <ul class="playing__list">
            <li class="playing__item">
              <div class="playing__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="playing__descr">
                <a class="playing__link" href="game-1.php">
                  Cat Wilde
                </a>
                <a class="playing__play" href="game-1.php">
                  Play
                </a>
              </div>
            </li>
            <li class="playing__item">
              <div class="playing__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="playing__descr">
                <a class="playing__link" href="game-2.php">
                  Ali Baba
                </a>
                <a class="playing__play" href="game-2.php">
                  Play
                </a>
              </div>
            </li>
            <li class="playing__item">
              <div class="playing__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="playing__descr">
                <a class="playing__link" href="game-3.php">
                  Wild Bazaar
                </a>
                <a class="playing__play" href="game-3.php">
                  Play
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="aypol" id="about">
        <div class="container">
          <h2 class="aypol__title">
            Free slots available
          </h2>
          <p class="aypol__text">
            Players looking for the best free slots are in luck - our site offers the widest selection of free slots.
            There is no need to download software, register on the site or pay pennies to play. This page provides
            access to free slots, information on how to play free slots, where to play slots for real money, the best
            free games without downloading and more information about this niche.
          </p>
          <p class="aypol__text">
            Start playing free games without download right now using the section above to choose your preferred game.
            New games are added to the list daily, so you can sort free Vegas slots by their release date for the
            trendiest options.
          </p>
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