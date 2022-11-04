<?php
include 'header.php';
?>
    <main>
      <section class="gero">
        <div class="container">
          <div class="gero__content">
            <div class="gero__body">
              <h1 class="gero__title">
                Games for your free time and enjoyment
              </h1>
              <a class="gero__link" href="#games">
                Play now
              </a>
            </div>
            <p class="gero__descleimer">
              <span>The games offered on the site do not give users the chance to win real money.</span>
              The site does not provide users with skills that can be used in real gambling. The games are available to
              users over 18 years of age.
            </p>
          </div>
        </div>
      </section>
      <section class="hero">
        <div class="hero__container container">
          <ul class="hero__list">
            <li class="hero__item">
              <p class="hero__text">
                The absence of risk in these games is an obvious plus, because in them you absolutely do not risk losing
                all your savings
              </p>
            </li>
            <li class="hero__item">
              <p class="hero__text">
                Here, we do not require any registration, you can start playing right after you have chosen a game and
                that's it.
              </p>
            </li>
            <li class="hero__item">
              <p class="hero__text">
                We offer you to play games without a deposit, that is, you can play in free mode and pay absolutely
                nothing.
              </p>
            </li>
          </ul>
          <div class="hero__image">
            <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="tero" id="about">
        <div class="container">
          <h2 class="tero__title">
            about us
          </h2>
          <div class="tero__content">
            <div class="tero__dscr">
              <p class="tero__text">
                Traditionally, most sites require registration, even if you only want to play once in free mode. Agree,
                this is too inconvenient, especially when you notice that your mailbox is constantly littered with
                promotional emails with promotions and bonus offers from clubs. Here, we do not require any
                registration, you can start playing right after you have chosen a game and that's it. All user
                information is securely protected on our site, as we do not need any personal data of people who are
                addicted to free games.In order to play free games you do not need to register and, of course, you do
                not need to enter any data.
              </p>
            </div>
            <div class="tero__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="rero" id="games">
        <div class="container">
          <ul class="rero__list">
            <li class="rero__item">
              <div class="rero__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
                </a>
              </div>
              <a class="rero__play" href="game-1.php">
                Play
              </a>
            </li>
            <li class="rero__item">
              <div class="rero__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
                </a>
              </div>
              <a class="rero__play" href="game-2.php">
                Play
              </a>
            </li>
            <li class="rero__item">
              <div class="rero__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Game"></picture>
                </a>
              </div>
              <a class="rero__play" href="game-3.php">
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
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Agree</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>