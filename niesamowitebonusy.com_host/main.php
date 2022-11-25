<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Najlepsze oryginalne gry
              </h1>
              <p class="hero__descleimer">
                <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
                dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <a class="hero__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="listus" id="benefits">
        <div class="container">
          <ul class="listus__list">
            <li class="listus__item">
              <span class="listus__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <div class="listus__descr">
                <h2 class="listus__title">
                  Graj w dowolnym miejscu i czasie
                </h2>
                <p class="listus__text">
                  Nasza strona jest dostępna przez całą dobę i bez przerwy. Weź dowolny wygodny gadżet i wejdź na naszą
                  stronę
                </p>
              </div>
            </li>
            <li class="listus__item">
              <span class="listus__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <div class="listus__descr">
                <h2 class="listus__title">
                  Graj prosto i bez inwestycji
                </h2>
                <p class="listus__text">
                  Aby rozpocząć grę, potrzebujesz minimum działań, po prostu wybierz najbardziej odpowiednią grę i
                  zacznij grać.
                </p>
              </div>
            </li>
            <li class="listus__item">
              <span class="listus__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <div class="listus__descr">
                <h2 class="listus__title">
                  Nowoczesna grafika i gry
                </h2>
                <p class="listus__text">
                  Teraz producenci tworzą coraz więcej zabawnych gier, a grafika za każdym razem jest coraz bardziej
                  niesamowita. Poczuj przyjemność z każdego spinu.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="sayning" id="about">
        <div class="container">
          <h2 class="sayning__title">
            O naszej stronie
          </h2>
          <div class="sayning__content">
            <div class="sayning__descr">
              <p class="sayning__text">
                Szukasz za darmo? To świetny sposób, aby dowiedzieć się więcej o grach. Wśród gier zyskały popularność z
                wielu powodów. Na przykład mają różne motywy, świetną rozgrywkę i dodatkowe funkcje, aby zapewnić
                graczom zabawne wrażenia.
              </p>
              <div class="sayning__item">
                <div class="sayning__texts">
                  <p class="sayning__text">
                    Jednak, aby dowiedzieć się o nich więcej, wiele osób decyduje się na zabawę w gry. To właśnie
                    umożliwiamy, miejsce, w którym możesz wypróbować takie oprogramowanie za darmo lub po prostu zagrać
                    dla zabawy.
                  </p>
                  <p class="sayning__text">
                    Jeśli jesteś nowy w takim oprogramowaniu i nie masz ochoty wydawać na niego pieniędzy, nasza strona
                    internetowa jest najlepszym miejscem do rozpoczęcia. Tutaj możesz spróbować swoich sił w różnych
                    grach za darmo. Zawieramy wiele gier kilku marek o różnych motywach i rozgrywce.
                  </p>
                </div>
              </div>
            </div>
            <div class="sayning__image" data-da=".sayning__item, 991, 1">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__link" href="game-1.php">
                  Pirates 2 Mutiny
                </a>
                <a class="slots__play" href="game-1.php">
                  <img src="./img/play.svg" alt="Icon">
                </a>
              </div>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__link" href="game-2.php">
                  Pirate Gold Deluxe
                </a>
                <a class="slots__play" href="game-2.php">
                  <img src="./img/play.svg" alt="Icon">
                </a>
              </div>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="slots__descr">
                <a class="slots__link" href="game-3.php">
                  Rage of the Seas
                </a>
                <a class="slots__play" href="game-3.php">
                  <img src="./img/play.svg" alt="Icon">
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>