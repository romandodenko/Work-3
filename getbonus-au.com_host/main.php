<?php
include 'header.php';
?>
    <main>
      <section class="gero">
        <div class="container">
          <div class="gero__content">
            <div class="gero__body">
              <h1 class="gero__title">
                Darmowe gry dla Ciebie
              </h1>
              <p class="gero__descleimer">
                <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
                dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <a class="gero__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="elger" id="benefits">
        <div class="container">
          <ul class="elger__list">
            <li class="elger__item">
              <h3 class="elger__title">
                Graj bez depozytu
              </h3>
              <p class="elger__text">
                Nowoczesne gry pozwalają nie uzupełniać salda i nie wpłacać środków, masz wirtualne konto z wirtualnymi
                pieniędzmi.
              </p>
            </li>
            <li class="elger__item">
              <h3 class="elger__title">
                Gra bez rejestracji
              </h3>
              <p class="elger__text">
                Ponieważ nie musisz wpłacać pieniędzy, nie jest wymagana rejestracja, nie potrzebujemy Twoich danych,
                aby po prostu rozpocząć grę.
              </p>
            </li>
            <li class="elger__item">
              <h3 class="elger__title">
                Gra bez pobierania
              </h3>
              <p class="elger__text">
                Gra nie wymaga żadnego dodatkowego oprogramowania, wystarczy dobre połączenie z internetem.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                <span>Bawić się
                  <img src="./img/arrow.svg" alt="Arrow">
                </span>
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                <span>Bawić się
                  <img src="./img/arrow.svg" alt="Arrow">
                </span>
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                <span>Bawić się
                  <img src="./img/arrow.svg" alt="Arrow">
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="nassek" id="about">
        <div class="nassek__container container">
          <div class="nassek__content">
            <div class="nassek__image" data-da=".nassek__item, 991, 0">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
            <div class="nassek__descr">
              <div class="nassek__top" data-da=".nassek__container, 991, 0">
                <h2 class="nassek__title">
                  O nas
                </h2>
                <h3 class="nassek__subtitle">
                  Darmowy hazard
                </h3>
              </div>
              <div class="nassek__item">
                <p class="nassek__text nassek__text_order1">
                  Niezależnie od tego, czy jesteś kompletnym nowicjuszem w grach, czy doświadczonym graczem, który chce
                  zagrać w nowe gry lub stare ulubione, granie w darmowe gry na naszej stronie nie może być prostsze.
                  Użyj
                  menu nawigacyjnego lub paska wyszukiwania, aby znaleźć to, czego szukasz, i możesz zagrać w dowolną
                  liczbę darmowych gier w ciągu kilku sekund.
                  Chcemy, abyś dobrze się bawił na naszej stronie, dlatego upewniliśmy się, że masz dostęp do
                  najlepszych
                  darmowych gier dla zabawy od wiodących światowych twórców oprogramowania.
                </p>
              </div>
              <p class="nassek__text nassek__text_order2" data-da=".nassek__item, 700, 1">
                Jesteśmy dumni, że możesz grać we wszystkie nasze darmowe gry bez pobierania dodatkowych programów lub
                aplikacji. Nigdy też nie poprosimy Cię o zarejestrowanie u nas konta w celu uzyskania dostępu do
                darmowych
                gier, które udostępniamy na naszej stronie.
                Chcemy, abyś mógł do nas dołączyć, kiedy tylko zechcesz grać w gry za darmo, bez żadnych dodatkowych
                zobowiązań. Wszystko, czego potrzebujesz, aby uzyskać dostęp do naszych treści, to stabilne połączenie
                internetowe i kompatybilne urządzenie, zarówno stacjonarne, jak i mobilne.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>