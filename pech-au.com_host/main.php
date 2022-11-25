<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Graj z nami w ekscytujące gry
              </h1>
              <p class="hero__descleimer">
                <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
                dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <div class="hero__links">
                <a class="hero__link hero__link_1" href="#games">
                  Zagraj teraz
                </a>
                <a class="hero__link hero__link_2" href="#about">
                  O nas
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="zalety" id="benefits">
        <div class="container">
          <h2 class="zalety__title title">
            Zalety
          </h2>
          <div class="zalety__content">
            <div class="zalety__image">
              <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
            </div>
            <ul class="zalety__list">
              <li class="zalety__item">
                <h3 class="zalety__subtitle">
                  Niesamowite gry
                </h3>
                <p class="zalety__text">
                  Ciesz się najlepszym wyborem gier! Wszystko opakowane jest w piękną grafikę, której towarzyszą
                  dynamiczne animacje, niesamowite efekty dźwiękowe i muzyka.
                </p>
              </li>
              <li class="zalety__item">
                <h3 class="zalety__subtitle">
                  Rejestracja nie jest wymagana
                </h3>
                <p class="zalety__text">
                  Nasza strona nie wymaga żadnych danych, wystarczy uruchomić grę i nie rejestrować się. Ponieważ nasze
                  gry nie wymagają żadnych inwestycji, nie wymagamy rejestracji, Twoje dane pozostaną z Tobą
                </p>
              </li>
              <li class="zalety__item">
                <h3 class="zalety__subtitle">
                  Istnieją adaptacyjne wersje witryny
                </h3>
                <p class="zalety__text">
                  Graj zawsze i wszędzie. Aby ułatwić Ci odwiedzanie naszej strony i grę, stworzyliśmy wersje
                  adaptacyjne dla każdego gadżetu. Nie ograniczaj się, baw się z nami.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="o-nas" id="about">
        <div class="container">
          <h2 class="o-nas__title title">
            O nas
          </h2>
          <ul class="o-nas__list">
            <li class="o-nas__item">
              <p class="o-nas__text">
                Główną zaletą serwisów jest zdalne i bezpieczne uruchamianie urządzeń przy zachowaniu anonimowości
                gracza i bez opłat. Niemożliwe jest poznanie tożsamości użytkownika spędzającego czas w trybie
                anonimowym. Zachowanie trybu incognito to główny powód, dla którego warto grać za darmo i bez
                rejestracji. Pozwoli Ci to zapoznać się z grami, ich funkcjonalnością, zaletami i wybrać grę.
                Odwiedzający będą mieli dostęp do bonusów, które są aktywowane oddzielnie w jednostce. Aby uruchomić
                gry, gracze korzystają z różnych klubów internetowych do zabawy. Każdy pełnoletni odwiedzający może
                bezpłatnie grać w gry za pośrednictwem Internetu.
              </p>
            </li>
            <li class="o-nas__item">
              <p class="o-nas__text">
                Darmowa gra uruchamia się po kilku kliknięciach w ikonę urządzenia. Aby aktywować, możesz użyć zwykłej
                przeglądarki, bez instalowania dodatkowego oprogramowania. Rejestracja nie jest potrzebna, podobnie jak
                korzystanie z pieniędzy. Odwiedzający otrzyma kilka tysięcy monet na uruchomienie spinów. W przypadku
                wyczerpania podanego limitu wystarczy odświeżyć stronę, a monety zostaną ponownie zaksięgowane na
                koncie. Wszystkie prezentowane rozrywki są uruchamiane bez opłat i wypełniania ankiet. Do rotacji
                wykorzystywane są kredyty dostarczone przez instytucję. Na stronie można uruchomić gry i zapoznać się z
                ich charakterystyką techniczną. Strona klubu zawiera różne gry, które można łatwo sortować za pomocą
                filtrów.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="gry" id="games">
        <div class="container">
          <h2 class="gry__title">
            Gry
          </h2>
          <ul class="gry__list">
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-1.php">
                Ice and Fire
              </a>
              <a class="gry__play" href="game-1.php">
                Bawić się
              </a>
            </li>
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-2.php">
                Sticky Joker
              </a>
              <a class="gry__play" href="game-2.php">
                Bawić się
              </a>
            </li>
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-3.php">
                Fire Strike
              </a>
              <a class="gry__play" href="game-3.php">
                Bawić się
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>