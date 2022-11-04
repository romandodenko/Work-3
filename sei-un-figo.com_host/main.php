<?php
include 'header.php';
?>
    <main>
      <section class="tutti">
        <div class="container">
          <div class="tutti__content">
            <div class="tutti__body">
              <span class="tutti__span">
                Qui troverai tutto il meglio del mondo dei giochi.
              </span>
              <h1 class="tutti__title">
                BENVENUTO A TUTTI GLI AMANTI DEL GIOCO
              </h1>
              <a class="tutti__link" href="#games">
                Riproduci ora
              </a>
            </div>
            <p class="tutti__descleimer">
              I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri.
              Il sito non fornisce agli utenti competenze che possono essere utilizzate nel gioco d'azzardo reale. I
              giochi sono disponibili per gli utenti di età superiore ai 18 anni.
            </p>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="content__body">
          <div class="gratuti" id="about">
            <div class="gratuti__container container">
              <div class="gratuti__descr">
                <strong class="gratuti__strong">
                  Informazioni sul nostro sito
                </strong>
                <h2 class="gratuti__title">
                  Giochi gratuiti
                </h2>
                <div class="gratuti__top">
                  <div class="gratuti__texts">
                    <p class="gratuti__text">
                      Sul sito, gli utenti possono giocare gratuitamente. Ciò ti consente di giocare alle  che ti piacciono senza registrazione, scoprirne le regole, nonché valutare il tasso di vincita, il tasso di rendimento, la volatilità e il gameplay. I crediti virtuali vengono utilizzati quando si avviano giochi e scommesse, quindi il giocatore non rischia i propri soldi.
                    </p>
                  </div>
                </div>
                <p class="gratuti__text" data-da=".gratuti__texts, 991, 1">
                  Ma devi ricordare che nel gioco gratuito non c'è modo di vincere soldi veri o ritirare le vincite dai giochi.
                </p>
                <p class="gratuti__text">
                  Ci sono diversi giochi tra cui scegliere, che coinvolgono avversari con livelli di gioco completamente diversi. Il casinò è adatto sia a principianti che a professionisti esperti.
                </p>
              </div>
              <div class="gratuti__image" data-da=".gratuti__top, 991, 1">
                <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
              </div>
            </div>
          </div>
          <div class="tagge" id="benefits">
            <div class="container">
              <h2 class="tagge__title">
                Vantaggi
              </h2>
              <ul class="tagge__list">
                <li class="tagge__item">
                  <span class="tagge__span">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <p class="tagge__text">
                    Giochi 3D moderne e di alta qualità con trame diverse e complete.
                  </p>
                </li>
                <li class="tagge__item">
                  <span class="tagge__span">
                    <img src="./img/icon-2.svg" alt="Icon">
                  </span>
                  <p class="tagge__text">
                    Emulatori di alta qualità con una versione virtuale dei giochi da tavolo.
                  </p>
                </li>
                <li class="tagge__item">
                  <span class="tagge__span">
                    <img src="./img/icon-3.svg" alt="Icon">
                  </span>
                  <p class="tagge__text">
                    Il sito ha diversi tipi di giochi con eccellenti recensioni dei giocatori.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="geogichi" id="games">
            <div class="container">
              <h2 class="geogichi__title">
                Giochi
              </h2>
              <ul class="geogichi__list">
                <li class="geogichi__item geogichi__item_1">
                  <a class="geogichi__link" href="game-1.php">
                    Giocare a
                  </a>
                </li>
                <li class="geogichi__item geogichi__item_2">
                  <a class="geogichi__link" href="game-2.php">
                    Giocare a
                  </a>
                </li>
                <li class="geogichi__item geogichi__item_3">
                  <a class="geogichi__link" href="game-3.php">
                    Giocare a
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>