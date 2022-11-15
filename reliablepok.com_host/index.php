<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <h1 class="main__title">
                Entertaining super games for free
              </h1>
              <a class="main__link" href="#games">
                Play now
              </a>
            </div>
            <p class="main__descleimer">
              <span>The games offered on the site do not give users a chance to win real money.</span>
              The site does not provide users with skills that can be used in real gambling. The games are available for
              users over the age of 18.
            </p>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="content__body">
          <div class="say" id="about">
            <div class="say__container container">
              <div class="say__descr">
                <h2 class="say__title">
                  About our games
                </h2>
                <p class="say__text">
                  You may be wondering what benefits you will get by playing games for fun. Well, apart from being able
                  to play hundreds of free demo games with enticing themes and exciting game mechanics, the best way to
                  get to know any game provider or new style of games is to play them for free.
                </p>
                <div class="say__item">
                  <p class="say__text">
                    This will allow you to explore each game in detail without spending real money learning how the game
                    works and which features are best activated. We believe this is especially useful for the high
                    volatility game genre that dominates the current gaming market. Learning how to play these games
                    even with the smallest stakes can quickly deplete your game balance. Thus, using our games is the
                    perfect way to expand your knowledge at no cost.
                  </p>
                </div>
              </div>
              <div class="say__image" data-da=".say__item, 1220, 1">
                <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
              </div>
            </div>
          </div>
          <div class="advantages" id="benefits">
            <div class="container">
              <h2 class="advantages__title">
                Advantages
              </h2>
              <ul class="advantages__list">
                <li class="advantages__item">
                  <div class="advantages__wrapper-icon">
                    <span class="advantages__icon">
                      <img src="./img/icon.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="advantages__subtitle">
                    Nothing to download
                  </h3>
                  <p class="advantages__text">
                    All you have to do to enjoy them is hit the play button.
                  </p>
                </li>
                <li class="advantages__item">
                  <div class="advantages__wrapper-icon">
                    <span class="advantages__icon">
                      <img src="./img/icon-2.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="advantages__subtitle">
                    Do not register
                  </h3>
                  <p class="advantages__text">
                    There is no need for such things, so we refuse to do this, we do not require your data from you.
                  </p>
                </li>
                <li class="advantages__item">
                  <div class="advantages__wrapper-icon">
                    <span class="advantages__icon">
                      <img src="./img/icon-3.svg" alt="Icon">
                    </span>
                  </div>
                  <h3 class="advantages__subtitle">
                    No pop-up ads
                  </h3>
                  <p class="advantages__text">
                    We will never bombard you with pop-up ads when you play our free games.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="play" id="games">
            <div class="container">
              <h2 class="play__title">
                Games
              </h2>
              <ul class="play__list">
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-1.php">
                    Troll Hunters 2
                  </a>
                </li>
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-2.php">
                    2 Gods
                  </a>
                </li>
                <li class="play__item">
                  <div class="play__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="play__link" href="game-3.php">
                    Greek Gods
                  </a>
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
          <a class="popup__button" href="main.php">Agree</a>
        </form>
      </div>
      </div>
<?php
include 'footer.php';
?>