<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="mtlb">
            <div class="container">
              <div class="mtlb__content">
                <p class="mtlb__descleimer">
                  I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri.
                  Il sito non fornisce agli utenti competenze che possono essere utilizzate nel gioco d'azzardo reale. I
                  giochi sono disponibili per gli utenti di età superiore ai 18 anni.
                </p>
                <div class="mtlb__body">
                  <h1 class="mtlb__title">
                    Il nostro sito ti offre i migliori giochi
                  </h1>
                  <p class="mtlb__text">
                    Vieni a trovarci e gioca gratuitamente ai migliori giochi divertenti
                  </p>
                  <a class="mtlb__link" href="#games">
                    Giocare a
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="oops" id="benefits">
            <div class="container">
              <ul class="oops__list">
                <li class="oops__item oops__item_1">
                  <h2 class="oops__title">
                    Giochi gratuiti
                  </h2>
                  <p class="oops__text">
                    Tutti i nostri giochi sono assolutamente gratuiti e non richiedono alcun investimento.
                  </p>
                </li>
                <li class="oops__item oops__item_2">
                  <h2 class="oops__title">
                    Facile accesso
                  </h2>
                  <p class="oops__text">
                    Puoi giocare sempre e ovunque, tutto ciò di cui hai bisogno è un dispositivo e un accesso a Internet
                  </p>
                </li>
                <li class="oops__item oops__item_3">
                  <h2 class="oops__title">
                    Non è richiesta la registrazione
                  </h2>
                  <p class="oops__text">
                    Non è necessario inserire nessun dato, il nostro sito non necessita di registrazione.
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="chi" id="about">
            <div class="container">
              <h2 class="chi__title">
                Chi siamo
              </h2>
              <div class="chi__content">
                <div class="chi__descr">
                  <div class="chi__item">
                    <p class="chi__tex">
                      Per tutti coloro che preferiscono giocare d'azzardo, è disponibile una modalità di prova. Non richiede il pagamento, l'indicazione dei dati personali, la conferma dell'identità e le informazioni di contatto. I vantaggi di questa modalità sono che qualsiasi principiante, senza il rischio di perdere i propri fondi, può attivare i migliori modelli, conoscere le regole e le caratteristiche e sviluppare le proprie tattiche per condurre il processo di gioco.
                    </p>
                  </div>
                  <p class="chi__tex" data-da=".chi__item, 600, 1">
                    Per comodità dei clienti, tutti i giochi nel catalogo possono essere eseguiti in una versione demo senza registrazione e gratuitamente. Grazie a questa opzione, il passatempo è comodo e sicuro. I giochi gratuiti hanno lo stesso aspetto grafico della versione principale. Gli utenti hanno accesso a tutte le opzioni fornite dal produttore, ad eccezione del ritiro dei guadagni.
                  </p>
                </div>
                <div class="chi__image" data-da=".chi__item, 991, 1">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </section>
          <section class="geoch" id="games">
            <div class="container">
              <h2 class="geoch__title">
                Giochi
              </h2>
              <ul class="geoch__list">
                <li class="geoch__item geoch__item_1">
                  <div class="geoch__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="geoch__link" href="game-1.php">
                    Emerald King
                  </a>
                  <a class="geoch__play" href="game-1.php">
                    Giocare a
                  </a>
                </li>
                <li class="geoch__item geoch__item_2">
                  <div class="geoch__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="geoch__link" href="game-2.php">
                    Wild Wild Riches
                  </a>
                  <a class="geoch__play" href="game-2.php">
                    Giocare a
                  </a>
                </li>
                <li class="geoch__item geoch__item_3">
                  <div class="geoch__image geoch__image_3">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="geoch__link" href="game-3.php">
                    Golden Tiket 2
                  </a>
                  <a class="geoch__play" href="game-3.php">
                    Giocare a
                  </a>
                </li>
              </ul>
            </div>
          </section>
        </main>
        <?php
        include 'footer.php';
        ?>