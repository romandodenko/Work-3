<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="loqst">
            <div class="container">
              <div class="loqst__content">
                <div class="loqst__body">
                  <span class="loqst__span">
                    Gry dla zabawy
                  </span>
                  <h1 class="loqst__title">
                    Najlepszy plac zabaw do zabaw rekreacyjnych
                  </h1>
                  <div class="loqst__links">
                    <a class="loqst__link loqst__link_1" href="#games">
                      Bawić się
                    </a>
                    <a class="loqst__link loqst__link_2" href="#about">
                      O nas
                    </a>
                  </div>
                </div>
                <p class="loqst__descleimer">
                  <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych
                    pieniędzy.</span>
                  Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry
                  są dostępne dla użytkowników powyżej 18 roku życia.
                </p>
              </div>
            </div>
          </section>
          <section class="two" id="benefits">
            <div class="container">
              <ul class="two__list">
                <li class="two__item">
                  <div class="two__descr">
                    <h2 class="two__title">
                      Nowoczesne gry
                    </h2>
                    <p class="two__text">
                      Śledzimy wszystkie nowe trendy w branży gier. Posiadamy nowoczesny i funkcjonalny design oraz
                      nowoczesne gry. Znajdziesz doskonałą kolorową grafikę i efekty dźwiękowe.
                    </p>
                  </div>
                  <span class="two__icon">
                    <img src="./img/benefits-1.svg" alt="Icon">
                  </span>
                </li>
                <li class="two__item">
                  <div class="two__descr">
                    <h2 class="two__title">
                      Wersje adaptacyjne
                    </h2>
                    <p class="two__text">
                      Każdy może wybrać, w którą grę i na jakim urządzeniu grać. Do tej pory postęp technologiczny
                      zapewnił darmowe gry, które są kompatybilne z każdym możliwym urządzeniem.
                    </p>
                  </div>
                  <span class="two__icon">
                    <img src="./img/benefits-2.svg" alt="Icon">
                  </span>
                </li>
              </ul>
            </div>
          </section>
          <section class="nas" id="about">
            <div class="container">
              <div class="nas__content">
                <h2 class="nas__title">
                  O nas
                </h2>
                <div class="nas__body">
                  <p class="nas__text">
                    Fascynujący świat hazardu zadziwia graczy różnorodnymi możliwościami gry. Ludzie mogą znaleźć sposób
                    na granie w różne gry za darmo. Hazard rozwija się wielkimi krokami. Każdego dnia wypuszczanych jest
                    wiele nowych gier, które są kompatybilne z różnymi platformami. Ponadto gracze mogą korzystać z
                    telefonów komórkowych, tabletów i innych urządzeń do gry na pulpicie. Wraz z tym rozwojem dostępna
                    jest szeroka gama darmowych rodzajów gier. Chodzi o wolność wyboru – każdy na pewno coś znajdzie.
                  </p>
                  <p class="nas__text">
                    Większość zakładów hazardowych oferuje darmowe gry dla każdego użytkownika przez całą dobę i
                    niezależnie od lokalizacji. Jeśli gracz nie ma zamiaru tracić pieniędzy, jest to świetny sposób na
                    granie w darmowe gry. Jednocześnie nie ma żadnych dodatkowych warunków, a użytkownik może je
                    odtwarzać bez rejestracji i pobierania. Postęp w hazardzie przynosi światu różne rodzaje gier.
                    Tradycyjnie rozróżnienie gier jest trudne, ale sensowne jest kategoryzowanie ich według wiodących
                    kategorii.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="gry" id="games">
            <div class="container">
              <ul class="gry__list">
                <li class="gry__item">
                  <div class="gry__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="gry__link" href="game-1.php">
                    Frozen Gems
                  </a>
                </li>
                <li class="gry__item">
                  <div class="gry__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="gry__link" href="game-2.php">
                    Frost Queen
                  </a>
                </li>
                <li class="gry__item">
                  <div class="gry__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="gry__link" href="game-3.php">
                    Icy Gems
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
              <div class="popup__image">
                <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
              </div>
              <div class="popup__descr">
                <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking
                  on the
                  button you confirm your age.</p>
                <label>
                  <input type="checkbox" name="number">
                </label>
                <label>
                  <input type="text" name="years-old">
                </label>
                <a class="popup__button" href="main.php">Agree</a>
              </div>
            </form>
          </div>
        </div>
<?php
include 'footer.php';
?>