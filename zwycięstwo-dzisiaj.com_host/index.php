<?php
include 'header.php';
?>
    <main>
      <section class="gerakl">
        <div class="container">
          <div class="gerakl__content">
            <div class="gerakl__body">
              <h1 class="gerakl__title">
                Każdy, kto uwielbia grać w gry
              </h1>
              <p class="gerakl__text">
                Odwiedź naszą stronę internetową, a będziesz miał dostęp do wszelkich zabawnych gier
              </p>
              <a class="gerakl__link" href="#games">
                Bawić się
              </a>
            </div>
            <p class="gerakl__descleimer">
              <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
              Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
              dostępne dla użytkowników powyżej 18 roku życia.
            </p>
          </div>
        </div>
      </section>
      <section class="chan" id="benefits">
        <div class="container">
          <h2 class="chan__title">
            Zalety
          </h2>
          <ul class="chan__list">
            <li class="chan__item">
              <h3 class="chan__subtitle">
                Nasze najlepsze gry
              </h3>
              <p class="chan__text">
                Jeśli szukasz ekscytujących gier - właśnie ją znalazłeś! Nasza strona oferuje pełną gamę automatów, aby
                zapewnić rozrywkę każdemu z naszych szlachetnych obywateli.
              </p>
            </li>
            <li class="chan__item">
              <h3 class="chan__subtitle">
                Graj na dowolnym urządzeniu
              </h3>
              <p class="chan__text">
                Nasza strona dostosowuje się odpowiednio do każdego urządzenia, a gry również wybierają dowolne miejsce
                i czas
              </p>
            </li>
            <li class="chan__item">
              <h3 class="chan__subtitle">
                Nie wymaga pobierania
              </h3>
              <p class="chan__text">
                Wszystko, czego potrzebujesz do gry, to dostęp do Internetu, bez konieczności pobierania. Po prostu
                zacznij grać.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="djeki" id="games">
        <div class="container">
          <h2 class="djeki__title">
            Gry
          </h2>
          <ul class="djeki__list">
            <li class="djeki__item">
              <div class="djeki__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="djeki__link" href="game-1.php">
                Bawić się
              </a>
            </li>
            <li class="djeki__item">
              <div class="djeki__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="djeki__link" href="game-2.php">
                Bawić się
              </a>
            </li>
            <li class="djeki__item">
              <div class="djeki__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="djeki__link" href="game-3.php">
                Bawić się
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="arnold" id="about">
        <div class="container">
          <div class="arnold__content">
            <div class="arnold__descr">
              <div class="arnold__item">
                <div class="arnold__texts">
                  <h2 class="arnold__title">
                    Gry dla zabawy
                  </h2>
                  <p class="arnold__text arnold__text_1">
                    Aby grać w gry za darmo bez rejestracji, wystarczy wejść na stronę klubu hazardowego, otworzyć
                    sekcję
                    gier i wybrać dowolną z nich. Otworzy się za darmo.
                    <span>Darmowe gry bez rejestracji oferują taką samą liczbę gier jak wersja standardowa. W sekcji
                      gier
                      jest wiele rodzajów gier.</span>
                  </p>
                </div>
              </div>
              <p class="arnold__text arnold__text_2" data-da=".arnold__item, 700, 1">
                Urządzenia różnią się fabułą, obecnością efektów specjalnych, bonusów i mechaniki. Każdy znajdzie dla
                siebie rozrywkę – zarówno fan komiksów, jak i fan klasycznych gier owocowych. Nie musisz wydawać
                własnych
                pieniędzy. Gry bez rejestracji oferują wirtualne monety do obstawiania. Jeśli użytkownik straci
                wszystko,
                po prostu odśwież stronę, aby uzupełnić konto. Ale wypłata wygranych na konto główne nie zadziała,
                wypali
                się po wyjściu z emulatora.
              </p>
            </div>
            <div class="arnold__image" data-da=".arnold__item, 991, 1">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
            </div>
          </div>
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
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Zgodzić się</a>
          </div>
        </form>
      </div>
      </div>
      <?php
      include 'footer.php';
      ?>