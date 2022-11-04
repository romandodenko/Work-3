<?php
include 'header.php';
?>
    <main>
      <section class="gero">
        <div class="container">
          <div class="gero__content">
            <div class="gero__body">
              <span class="gero__span">
                Zabawna rozrywka
              </span>
              <h1 class="gero__title">
                Graj z naszą stroną
              </h1>
              <p class="gero__text">
                Zabawne gry czekają na Ciebie na naszej stronie przez całą dobę, graj i ciesz się
              </p>
              <a class="gero__link" href="#games">
                Gry
              </a>
            </div>
            <p class="gero__descleimer">
              Gry oferowane na stronie nie dają użytkownikom możliwości wygrania prawdziwych pieniędzy.
              Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
              dostępne dla użytkowników powyżej 18 roku życia.
            </p>
          </div>
        </div>
      </section>
      <section class="grygame" id="games">
        <div class="container">
          <h2 class="grygame__title">
            Nasze gry
          </h2>
          <ul class="grygame__list">
            <li class="grygame__item">
              <div class="grygame__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="grygame__descr">
                <a class="grygame__link" href="game-1.php">
                  Congo Cash
                </a>
                <a class="grygame__play" href="game-1.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="grygame__item">
              <div class="grygame__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="grygame__descr">
                <a class="grygame__link" href="game-2.php">
                  Fish Reels
                </a>
                <a class="grygame__play" href="game-2.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="grygame__item">
              <div class="grygame__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="grygame__descr">
                <a class="grygame__link" href="game-3.php">
                  Big Bass Bonanza
                </a>
                <a class="grygame__play" href="game-3.php">
                  Bawić się
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="ibiot" id="about">
        <div class="container">
          <h2 class="ibiot__title">
            O naszym kasynie społecznościowym
          </h2>
          <p class="ibiot__text">
            Graj w prawdziwe gry Las Vegas za darmo oraz setki ekscytujących nowych tytułów
            Stawiamy na prawdziwe gry tworzone przez najlepszych producentów gier. Możesz grać w zupełnie nowe gry bez wydawania prawdziwych pieniędzy. Nie jest wymagana wpłata ani rejestracja, są to gry na prawdziwe pieniądze, w które możesz grać za darmo.
          </p>
          <p class="ibiot__text">
            Jeśli jesteś początkującym, jest to świetny sposób na poznanie zasad i zaznajomienie się z oprogramowaniem do gry bez ryzykowania pieniędzy. Możesz wypróbować nowe gry, w które nigdy wcześniej nie grałeś i nie chcesz ryzykować swojego bankrolla.
          </p>
          <ul class="ibiot__list">
            <li class="ibiot__item ibiot__item_1">
                <picture><source srcset="./img/image-1.webp"type="image/webp"><img src="./img/image-1.png" alt="Image"></picture>
            </li>
            <li class="ibiot__item ibiot__item_2">
                <picture><source srcset="./img/image-2.webp"type="image/webp"><img src="./img/image-2.png" alt="Image"></picture>
            </li>
            <li class="ibiot__item ibiot__item_3">
                <picture><source srcset="./img/image-3.webp"type="image/webp"><img src="./img/image-3.png" alt="Image"></picture>
            </li>
          </ul>
        </div>
      </section>
      <section class="lex" id="benefits">
        <div class="container">
          <ul class="lex__list">
            <li class="lex__item">
              <div class="lex__descr">
                <h2 class="lex__title">
                  Dobra gra głosowa
                </h2>
                <p class="lex__text">
                  W naszych grach będziesz zaskoczony wysokiej jakości głosem każdego spinu
                </p>
              </div>
              <span class="lex__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
            </li>
            <li class="lex__item">
              <div class="lex__descr">
                <h2 class="lex__title">
                  Dobra gra głosowa
                </h2>
                <p class="lex__text">
                  W naszych grach będziesz zaskoczony wysokiej jakości głosem każdego spinu
                </p>
              </div>
              <span class="lex__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>