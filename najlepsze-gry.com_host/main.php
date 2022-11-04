<?php
include 'header.php';
?>
    <main>
      <section class="ponch">
        <div class="container">
          <div class="ponch__content">
            <div class="ponch__body">
              <h1 class="ponch__title">
                Zapraszamy do naszego klubu hazardowego
              </h1>
              <p class="ponch__descleimer">
                <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
                Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są dostępne dla użytkowników powyżej 18 roku życia.
              </p>
              <a class="ponch__link" href="#games">
                Zagraj teraz
              </a>
            </div>
            <ul class="ponch__list">
              <li class="ponch__item">
                <h3 class="ponch__subtitle">
                  Przychodź codziennie
                </h3>
                <p class="ponch__text">
                  Gry na stronie są dostępne przez całą dobę, przyjdź i zagraj w nasze gry
                </p>
              </li>
              <li class="ponch__item">
                <h3 class="ponch__subtitle">
                  Gry wysokiej jakości
                </h3>
                <p class="ponch__text">
                  Wysokiej jakości emulatory z wirtualną wersją gier planszowych.
                </p>
              </li>
              <li class="ponch__item">
                <h3 class="ponch__subtitle">
                  nie uprawiasz hazardu
                </h3>
                <p class="ponch__text">
                  Gry to nie hazard, kiedy je uruchamiasz, nie masz szans na wygranie prawdziwych pieniędzy ani nagród.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="poncher" id="about">
        <div class="poncher__container container">
          <div class="poncher__descr">
            <h2 class="poncher__title">
              O naszej stronie
            </h2>
            <p class="poncher__text">
              Aby zacząć grać w gry za darmo, gracz powinien wybrać witrynę. Następnie musisz zapoznać się z ogólnymi informacjami na portalu i zdecydować o rodzaju urządzenia.
            </p>
            <div class="poncher__item">
              <p class="poncher__text">
                Po wybraniu gry pozostaje nacisnąć klawisz PLAY. Aby gra rozpoczęła się bez problemów. Rozgrywka w trybie swobodnym odbywa się na wirtualnych kredytach, które nadawane są przez administrację klubu. Jeśli depozyt wyniesie zero, należy odświeżyć stronę, a pieniądze zostaną ponownie zaksięgowane. Urządzenia w darmowej wersji wizualnie niczym nie różnią się od płatnych modeli. Nie wymagają rejestracji ani potwierdzenia SMS-em. W dowolnym momencie możesz grać w trybie nieograniczonym.
              </p>
            </div>
          </div>
          <div class="poncher__image" data-da=".poncher__item, 991, 1">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
          </div>
        </div>
      </section>
      <section class="ponchers" id="games">
        <div class="container">
          <h2 class="ponchers__title">
            Gry
          </h2>
          <ul class="ponchers__list">
            <li class="ponchers__item ponchers__item_1">
              <div class="ponchers__links">
              <a class="ponchers__link" href="game-1.php">Sinbad 2</a>
              <a class="ponchers__play" href="game-1.php">Bawić się</a>
              </div>
            </li>
            <li class="ponchers__item ponchers__item_2">
              <div class="ponchers__links">
              <a class="ponchers__link" href="game-2.php">Aliya’s Wishes</a>
              <a class="ponchers__play" href="game-2.php">Bawić się</a>
              </div>
            </li>
            <li class="ponchers__item ponchers__item_3">
              <div class="ponchers__links">
              <a class="ponchers__link" href="game-3.php">Star Bounty</a>
              <a class="ponchers__play" href="game-3.php">Bawić się</a>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>