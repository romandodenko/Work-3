<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Il nostro sito è una grande opportunità per trascorrere del tempo con piacere
              </span>
              <h1 class="hero__title">
                Benvenuti nel sito dei migliori giochi
              </h1>
              <a class="hero__link" href="#games">
                Riproduci ora
              </a>
            </div>
            <p class="hero__descleimer">
              I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri.
              Il sito non fornisce agli utenti competenze che possono essere utilizzate nel gioco d'azzardo reale. I
              giochi sono disponibili per gli utenti di età superiore ai 18 anni.
            </p>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <h2 class="benefits__title">
                Gioco senza limiti
              </h2>
              <p class="benefits__text">
                Non è più necessario impostare un limite di deposito. Gioca per il tuo piacere quanto vuoi.
              </p>
            </li>
            <li class="benefits__item">
              <h2 class="benefits__title">
                Eccellente doppiaggio
              </h2>
              <p class="benefits__text">
                Gli effetti sonori ti delizieranno, puoi sentire ogni giro con i nostri effetti sonori
              </p>
            </li>
            <li class="benefits__item">
              <h2 class="benefits__title">
                Grafica ad alto livello
              </h2>
              <p class="benefits__text">
                Nuovi personaggi e una buona resa di tutti i dettagli ti impressioneranno, goditi gli effetti visivi
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
                Rage of the seas
              </a>
              <a class="games__play" href="game-1.php">
                Giocare a
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Voodoo Magic
              </a>
              <a class="games__play" href="game-2.php">
                Giocare a
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Pirates smugglers Paradise
              </a>
              <a class="games__play" href="game-3.php">
                Giocare a
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <div class="about__content">
            <div class="about__image" data-da=".about__item, 991, first">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
            <div class="about__descr">
              <div class="about__item">
                <div class="about__texts">
                  <h2 class="about__title">
                    Informazioni sui nostri giochi
                  </h2>
                  <p class="about__text about__text_1">
                    L'essenza e il significato del gioco, in tutti i tipi di giochi, sta nella scelta della puntata e
                    del numero di linee di pagamento, premendo il pulsante di avvio, con ripetizione regolare di
                    pressioni e combinazioni vincenti, in particolare ai giocatori piace prendere giri gratis giochi
                    bonus, è in loro che tutto il brusio del gioco, poiché i crediti non vengono spesi e la
                    moltiplicazione delle vincite virtuali può essere multipla. Giocare ai giochi è comodo e semplice,
                    basta premere il mouse mentre provi tutto gratuitamente sul nostro sito web.
                  </p>
                </div>
              </div>
              <p class="about__text about__text_2" data-da=".about__item, 700, 1">
                Il compito del giocatore è raccogliere combinazioni di simboli. Per le combinazioni di immagini
                semplici, il giocatore riceve una ricompensa in valuta di gioco. I simboli speciali svolgono funzioni
                aggiuntive: completano combinazioni, lanciano giri gratuiti o giochi bonus.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">I nostri giochi sono destinati a un pubblico ADULTO dai 18 anni in su. Cliccando sul
            pulsante confermi la tua età.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Concordare</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>