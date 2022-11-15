<?php
include 'header.php';
?>
    <main>
      <section class="bleck">
        <div class="container">
          <div class="bleck__content">
            <div class="bleck__body">
              <h1 class="bleck__title">
                Free Games
              </h1>
              <p class="bleck__text">
                Play the best free games today
              </p>
              <a class="bleck__link" href="#games">
                Play Now
              </a>
            </div>
            <p class="bleck__descleimer">
              <span>The games offered on the site do not give users the chance to win real money.</span>
              The site does not provide users with skills that can be used in real gambling. The games are available to
              users over 18 years of age.
            </p>
          </div>
        </div>
      </section>
      <section class="bluck">
        <div class="container">
          <h2 class="bluck__title">
            Advantages
          </h2>
          <div class="bluck__content">
            <ul class="bluck__list">
              <li class="bluck__item">
                <span class="bluck__icon">
                  <img src="./img/icon.svg" alt="Icon">
                </span>
                <div class="bluck__descr">
                  <h3 class="bluck__subtitle">
                    Registration is not required
                  </h3>
                  <p class="bluck__text">
                    You can play most games without registration, without downloading, without registration, and without
                    any obligations at all.
                  </p>
                </div>
              </li>
              <li class="bluck__item">
                <span class="bluck__icon">
                  <img src="./img/icon.svg" alt="Icon">
                </span>
                <div class="bluck__descr">
                  <h3 class="bluck__subtitle">
                    Save money
                  </h3>
                  <p class="bluck__text">
                    We talk about security here all the time, and most of the time we talk about financial security. Do
                    not worry about your wallet, because slots do not require any funds.
                  </p>
                </div>
              </li>
              <li class="bluck__item">
                <span class="bluck__icon">
                  <img src="./img/icon.svg" alt="Icon">
                </span>
                <div class="bluck__descr">
                  <h3 class="bluck__subtitle">
                    Site access
                  </h3>
                  <p class="bluck__text">
                    You have 24/7 access to our website. There is no need to break away from the game, all you need is
                    your gadget.
                  </p>
                </div>
              </li>
            </ul>
            <div class="bluck__image">
              <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="blyck" id="about">
        <div class="container">
          <h2 class="blyck__title">
            About our site
          </h2>
          <p class="blyck__text">
            Free games for fun are really a player's best friend. With free games available 24/7, you have a guaranteed
            place to explore at any time. Here we will discuss some of the features of free games and get to know some
            people who create magic.Video slots, games and more can be accessed through our free casino site and here we
            offer free casino games for you to enjoy a variety of video slots from the world's number one casino
            developers. These are 100% authentic reel slots, pardon the pun, so please feel free to play the most unique
            free slots you won't find anywhere else.
          </p>
          <p class="blyck__text">
            If this is your first time gambling, then you can have the best Vegas experience without parting with a
            single coin. Free slots require no download or additional software for each game. Just click and play up to
            24/7 as many times as you want. Free slots and machines have remained successful throughout their existence,
            becoming a cult symbol for both traditional casinos and casinos.
          </p>
        </div>
      </section>
      <section class="black" id="games">
        <div class="container">
          <h2 class="black__title">
            Games
          </h2>
          <ul class="black__list">
            <li class="black__item">
              <div class="black__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="black__link" href="game-1.php">
                Play
              </a>
            </li>
            <li class="black__item">
              <div class="black__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="black__link" href="game-2.php">
                Play
              </a>
            </li>
            <li class="black__item">
              <div class="black__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="black__link" href="game-3.php">
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