<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="top">
            <div class="container">
              <a class="top__logo" href="main.php">
                <img src="./img/logo.svg" alt="Logo">
              </a>
            </div>
          </section>
          <section class="hugo">
            <div class="container">
              <div class="hugo__content">
                <div class="hugo__body">
                  <span class="hugo__span">
                    Poczuj emocje związane z naszymi grami absolutnie bez utraty pieniędzy
                  </span>
                  <h1 class="hugo__title">
                    Graj w darmowe gry
                  </h1>
                  <p class="hugo__descleimer">
                    <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych
                      pieniędzy.</span>
                    Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry
                    są dostępne dla użytkowników powyżej 18 roku życia.
                  </p>
                  <a class="hugo__link" href="#games">
                    Oglądaj gry
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="gogi" id="games">
            <div class="container">
              <h2 class="gogi__title title">
                Gry
              </h2>
              <ul class="gogi__list">
                <li class="gogi__item">
                  <div class="gogi__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                </li>
                <li class="gogi__item">
                  <div class="gogi__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                </li>
                <li class="gogi__item">
                  <div class="gogi__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <section class="ebaut" id="about">
            <div class="container">
              <h2 class="ebaut__title title">
                O nas
              </h2>
              <div class="ebaut__content">
                <div class="ebaut__image" data-da=".ebaut__item, 991, 0">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
                <div class="ebaut__descr">
                  <div class="ebaut__item">
                    <p class="ebaut__text">
                      Jeśli jesteś entuzjastą gier i uwielbiasz próbować nowych gier, to trafiłeś we właściwe miejsce.
                      Przywieźliśmy dużo gier. Każda gra należy do znanego twórcy gier na naszej stronie. Otrzymasz
                      zarówno proste, jak i złożone gry.
                      Ponadto setki darmowych gier są dostępne bez rejestracji. Kolejną zaletą są darmowe gry bez
                      pobierania, bez rejestracji. Ponadto możesz również pobierać gry. Ponadto możesz znaleźć różne gry
                      bonusowe i cieszyć się darmowymi spinami.
                    </p>
                  </div>
                  <p class="ebaut__text">
                    Te gry to najlepszy sposób na poznanie gier. Jest również wolny od ryzyka z prawdziwymi pieniędzmi.
                    Przygotuj się do gry w owoce. Możesz uzyskać dostęp do tej fantastycznej kolekcji gier planszowych i
                    mobilnych.
                    Gry mają różne kształty i rozmiary, chociaż podstawowa gra i rozgrywka są takie same. Czy to tanie
                    gry, klasyczne gry czy darmowe gry. Tutaj znajdziesz wybrane przez siebie gry - nie musisz ryzykować
                    pieniędzy. Usiądź wygodnie i ciesz się darmową wersją gier. Ponadto możesz korzystać z różnych
                    mechanizmów, aby się nimi cieszyć. Możesz nawet pobrać darmowe gry.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="john" id="benefits">
            <div class="container">
              <h2 class="john__title title">
                Korzyść
              </h2>
              <ul class="john__list">
                <li class="john__item">
                  <span class="john__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h3 class="john__subtitle">
                    Nie musisz podawać danych osobowych
                  </h3>
                  <p class="john__text">
                    Nie musisz się rejestrować w serwisie, nie trać czasu osobistego. Wskocz do gry
                  </p>
                </li>
                <li class="john__item">
                  <span class="john__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h3 class="john__subtitle">
                    Gry wysokiej jakości
                  </h3>
                  <p class="john__text">
                    Tutaj znajdziesz tylko wysokiej jakości gry z najnowocześniejszą grafiką.
                  </p>
                </li>
                <li class="john__item">
                  <span class="john__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h3 class="john__subtitle">
                    Wszystkie gry są darmowe
                  </h3>
                  <p class="john__text">
                    Nie jest wymagana żadna inwestycja gotówkowa, Twoje saldo jest wirtualne i uzupełnia się
                    automatycznie.
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
              <p class="popup__text">Nasze gry są przeznaczone dla DOROSŁYCH odbiorców w wieku 18 lat i starszych. Klikając na
                 przycisk potwierdzasz swój wiek.</p>
              <label>
                <input type="checkbox" name="number">
              </label>
              <label>
                <input type="text" name="years-old">
              </label>
              <a class="popup__button" href="main.php">Zgodzić się</a>
            </form>
          </div>
          </div>
<?php
include 'footer.php';
?>