<?php
include 'header.php';
?>
    <main>
      <section class="jock">
        <div class="container">
          <div class="jock__content">
            <div class="jock__body">
              <h1 class="jock__title">
                Baw się z nami dzięki ekscytującym grom
              </h1>
              <div class="jock__links">
                <a class="jock__link jock__link_1" href="#about">
                  O nas
                </a>
                <a class="jock__link jock__link_2" href="#games">
                  Bawić się
                </a>
              </div>
            </div>
            <p class="jock__descleimer">
              <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych pieniędzy.</span>
              Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
              dostępne dla użytkowników powyżej 18 roku życia.
            </p>
          </div>
        </div>
      </section>
      <section class="jack" id="games">
        <div class="container">
          <h2 class="jack__title">
            Nasze gry
          </h2>
          <ul class="jack__list">
            <li class="jack__item">
              <div class="jack__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Game"></picture>
                </a>
              </div>
              <div class="jack__descr">
                <a class="jack__link" href="game-1.php">
                  Mysterious Egypt
                </a>
                <a class="jack__play" href="game-1.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="jack__item">
              <div class="jack__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Game"></picture>
                </a>
              </div>
              <div class="jack__descr">
                <a class="jack__link" href="game-2.php">
                  Scarab Temple
                </a>
                <a class="jack__play" href="game-2.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="jack__item">
              <div class="jack__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Game"></picture>
                </a>
              </div>
              <div class="jack__descr">
                <a class="jack__link" href="game-3.php">
                  The Wild Machine
                </a>
                <a class="jack__play" href="game-3.php">
                  Bawić się
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="jeck" id="about">
        <div class="container">
          <h2 class="jeck__title">
            O nas
          </h2>
          <div class="jeck__content">
            <div class="jeck__descr">
              <p class="jeck__text">
                Wcześniej tylko prawdziwe kluby gier zapewniały możliwość grania w nowe gry, ale nie wszyscy stali się
                ich gośćmi. Odkąd hazard przeniósł się do Internetu, kobiety, studenci i inne segmenty populacji
                dołączyły do ​​ogromnej armii graczy, którzy wcześniej nie mieli okazji zagrać w te interesujące gry.
                Nie ma co bać się uzależnienia od gier – nie jest ono zrobione, gracz po prostu lubi grać w Fortunę za
                darmo i często ją pokonuje. A czasami wygrywa. Zapoznaj się ze strategiami gry innych graczy - możesz to
                zrobić uczestnicząc w ogólnych turniejach i zawodach. Wszystkie popularne gry dobrej jakości
                wykorzystują oryginalne oprogramowanie, wszędzie jest mechanizm, który gwarantuje graczowi nie tylko
                wirtualne wygrane, ale także super nagrody. Jednocześnie możesz grać bez rejestracji i doładowywania
                konta, wszystkie maszyny są całkowicie darmowe i nie wymagają wysyłania SMS-ów.
              </p>
            </div>
            <div class="jeck__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="jyck" id="benefits">
        <div class="container">
          <ul class="jyck__list">
            <li class="jyck__item">
              <span class="jyck__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h2 class="jyck__title">
                Responsywne wersje witryn
              </h2>
              <p class="jyck__text">
                Graj na dowolnym urządzeniu, w dowolnym miejscu
              </p>
            </li>
            <li class="jyck__item">
              <span class="jyck__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h2 class="jyck__title">
                Rejestracja nie jest wymagana
              </h2>
              <p class="jyck__text">
                Nie prosimy o podanie jakichkolwiek danych
              </p>
            </li>
            <li class="jyck__item">
              <span class="jyck__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="jyck__title">
                Wszystkie gry są darmowe
              </h2>
              <p class="jyck__text">
                Graj w nasze gry całkowicie za darmo, baw się bez wydawania pieniędzy
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
          <div class="popup__image">
            <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
          </div>
          <div class="popup__descr">
            <p class="popup__text">Nasze gry są przeznaczone dla DOROSŁYCH odbiorców w wieku 18 lat i starszych. Klikając na
              ten
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
          </div>
        </form>
      </div>
    </div>
<?php
include 'footer.php';
?>