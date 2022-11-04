<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Qui troverai un'abbondanza di giochi di vario tipo e trama
              </h1>
              <a class="hero__link" href="#games">
                Guarda le partite
              </a>
            </div>
            <p class="hero__descleimer">
              <span>I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri.</span>
              Il sito non fornisce agli utenti competenze che possono essere utilizzate nel gioco d'azzardo reale. I
              giochi sono disponibili per gli utenti di età superiore ai 18 anni.
            </p>
          </div>
        </div>
      </section>
      <section class="vantagi" id="benefits">
        <div class="container">
          <h2 class="vantagi__title">
            Vantaggi
          </h2>
          <div class="vantagi__content">
            <ul class="vantagi__list">
              <li class="vantagi__item">
                <span class="vantagi__circle"></span>
                <p class="vantagi__text">
                  I giochi non sono scommesse, una volta che li avvii non hai possibilità di vincere soldi veri o premi.
                  Gioca esclusivamente per il tuo piacere.
                </p>
              </li>
              <li class="vantagi__item">
                <span class="vantagi__circle"></span>
                <p class="vantagi__text">
                  Puoi giocare sempre e ovunque. Non limitarti al solo computer, gioca dal tuo smartphone o tablet,
                  tutto ciò di cui hai bisogno è internet. Siamo felici di offrirti il ​​meglio del tuo tempo libero.
                </p>
              </li>
              <li class="vantagi__item">
                <span class="vantagi__circle"></span>
                <p class="vantagi__text">
                  Non è necessario registrarsi o scaricare alcun gioco, tutti i giochi sono disponibili con Internet.
                  Non inserire alcun dato, devi solo scegliere il gioco migliore ed eseguirlo.
                </p>
              </li>
            </ul>
            <div class="vantagi__image">
              <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="gio" id="games">
        <div class="container">
          <h2 class="gio__title">
            Giochi
          </h2>
          <ul class="gio__list">
            <li class="gio__item gio__item_1">
              <a class="gio__link" href="game-1.php">
                Tiki Mania
                <img src="./img/play.svg" alt="Icon">
              </a>
            </li>
            <li class="gio__item gio__item_2">
              <a class="gio__link" href="game-2.php">
                Lucky Tropics
                <img src="./img/play.svg" alt="Icon">
              </a>
            </li>
            <li class="gio__item gio__item_3">
              <a class="gio__link" href="game-3.php">
                Tropical Wilds
                <img src="./img/play.svg" alt="Icon">
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            Chi siamo
          </h2>
          <div class="about__content">
            <div class="about__column">
              <p class="about__text">
                Giocare ha una serie di vantaggi rispetto ai giochi terrestri. Innanzitutto, non c'è bisogno di un lungo
                viaggio in un'altra zona della città, dove molto probabilmente si trova lo stabilimento: la sala giochi
                si trova a casa tua, proprio dietro il tuo computer. In secondo luogo, non c'è bisogno di adeguarsi al
                programma: visita il sito in qualsiasi momento e gioca almeno 24 ore al giorno, e in terzo luogo, puoi
                giocare gratuitamente: solo per "wrapper" (crediti virtuali). La sala sta già aspettando te e i tuoi
                amici.
              </p>
            </div>
            <div class="about__column">
              <p class="about__text">
                In precedenza, i giocatori erano molto vincolati nella scelta dei giochi per il loro divertimento. Ho
                dovuto limitarmi all'elenco fornito dalla sala da gioco. L'amministrazione non si è davvero sforzata e
                si sta adoperando per diversificare l'assortimento: un nuovo dispositivo è una cosa costosa. Sul
                portale, la scelta è enorme, inoltre i nuovi giochi sono dotati di dettagli utili.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>