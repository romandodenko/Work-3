<?php
include 'header.php';
?>
    <main>
      <section class="grija">
        <div class="container">
          <div class="grija__content">
            <div class="grija__body">
              <span class="grija__span">
                Graj na naszej stronie całkowicie za darmo
              </span>
              <h1 class="grija__title">
                Gry rozrywkowe
              </h1>
              <p class="grija__text">
                Na naszej stronie wszystkie gry są dostępne przez całą dobę i bezpłatnie.
              </p>
              <a class="grija__link" href="#games">
                Zagraj teraz
              </a>
            </div>
            <p class="grija__descleimer">
              Gry oferowane na stronie nie dają użytkownikom możliwości wygrania prawdziwych pieniędzy.
Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są dostępne dla użytkowników powyżej 18 roku życia.
            </p>
          </div>
        </div>
      </section>
      <section class="section-games" id="games">
        <div class="container">
          <ul class="section-games__list">
            <li class="section-games__item">
              <div class="section-games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
                </a>
              </div>
              <div class="section-games__descr">
                <a class="section-games__link" href="game-1.php">
                  The Hand of Midas
                </a>
                <a class="section-games__play" href="game-1.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="section-games__item">
              <div class="section-games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
                </a>
              </div>
              <div class="section-games__descr">
                <a class="section-games__link" href="game-2.php">
                  Gems Bonanza
                </a>
                <a class="section-games__play" href="game-2.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="section-games__item">
              <div class="section-games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
                </a>
              </div>
              <div class="section-games__descr">
                <a class="section-games__link" href="game-3.php">
                  Maze Escape
                </a>
                <a class="section-games__play" href="game-3.php">
                  Bawić się
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="section-benefits" id="benefits">
        <div class="container">
          <ul class="section-benefits__list">
            <li class="section-benefits__item">
              <span class="section-benefits__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h2 class="section-benefits__title">
                Anonimowość
              </h2>
              <p class="section-benefits__text">
                Na naszej stronie nie musisz się rejestrować, nie musisz wypełniać żadnych dodatkowych formularzy
              </p>
            </li>
            <li class="section-benefits__item">
              <span class="section-benefits__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h2 class="section-benefits__title">
                Graj na dowolnym urządzeniu
              </h2>
              <p class="section-benefits__text">
                Wyjdź poza komputer, graj na dowolnym urządzeniu, w dowolnym miejscu
              </p>
            </li>
            <li class="section-benefits__item">
              <span class="section-benefits__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="section-benefits__title">
                Graj przez całą dobę
              </h2>
              <p class="section-benefits__text">
                Strona jest dostępna w dogodnym dla Ciebie czasie, do gry potrzebujesz tylko Internetu.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="section-about" id="about">
        <div class="section-about__container container">
          <div class="section-about__descr">
            <h2 class="section-about__title">
              O naszych darmowych grach
            </h2>
            <p class="section-about__text">
              Nasza strona wita Cię na swojej zintegrowanej platformie, witrynie wypełnionej popularnymi darmowymi grami rozrywkowymi, opracowanej przez najlepszych dostawców. Dołącz do nas, aby doświadczyć ekscytującej kolekcji gier dostępnych za darmo, bez prawdziwych pieniędzy, aby zasmakować hazardu.
            </p>
            <div class="section-about__item">
              <p class="section-about__text">
                Staramy się zaskoczyć Cię nie tylko grami, ale także niesamowitym interfejsem użytkownika, który nie ma sobie równych. Odwiedź nas i weź udział w naszej podróży, aby skorzystać z naszych usług. Tak jak każda inna platforma hazardowa , my również mamy cel. Naszym celem jest dostarczanie wyjątkowych gier, a co za tym idzie osiągnięcie satysfakcji klienta. Krótko mówiąc, dokładamy wszelkich starań, aby zapewnić Ci jak najlepsze wrażenia za każdym razem, gdy wchodzisz do naszego głównego świata hazardu. Przygotuj się więc na oszałamiające doświadczenie, które czeka na Ciebie po drodze.
              </p>
            </div>
          </div>
          <div class="section-about__image" data-da=".section-about__item, 991, 1">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>