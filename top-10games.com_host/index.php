<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Immergiti nel mondo dei giochi divertenti
              </h1>
              <a class="hero__link" href="#games">
                Riproduci ora
              </a>
              <p class="hero__descleimer">
                <span>I giochi offerti sul sito non danno agli utenti la possibilità di vincere soldi veri.</span>
                Il sito non fornisce agli utenti competenze che possono essere utilizzate nel gioco d'azzardo reale. I
                giochi sono disponibili per utenti di età superiore ai 18 anni.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="amo" id="benefits">
        <div class="container">
          <ul class="amo__list">
            <li class="amo__item">
              <h2 class="amo__title">
                Rifornimento automatico
              </h2>
              <p class="amo__text">
                I nostri giochi hanno un account virtuale che si ricarica automaticamente in modo che il tuo gioco possa
                durare per sempre.
              </p>
            </li>
            <li class="amo__item">
              <h2 class="amo__title">
                Facile accesso al gioco
              </h2>
              <p class="amo__text">
                Per giocare non è necessario registrarsi o scaricare qualcosa, basta cliccare sul gioco che ti piace e
                giocare.
              </p>
            </li>
            <li class="amo__item">
              <h2 class="amo__title">
                Doppiaggio per ogni partita
              </h2>
              <p class="amo__text">
                Gli effetti sonori del gioco lo rendono più eccitante e ti permettono di immergerti ancora di più
                nell'atmosfera del gioco.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="siamo" id="about">
        <div class="container">
          <h2 class="siamo__title">
            Chi siamo
          </h2>
          <div class="siamo__content">
            <div class="siamo__descr">
              <h3 class="siamo__subtitle">
                Informazioni sul nostro intrattenimento gratuito
              </h3>
              <p class="siamo__text">
                Se sei un appassionato di giochi e ami provare nuovi giochi, sei nel posto giusto. Ogni gioco appartiene
                a un noto sviluppatore di giochi sul nostro sito. Otterrai sia giochi semplici che difficili.
              </p>
              <div class="siamo__item">
                <p class="siamo__text">
                  Inoltre, sono disponibili giochi gratuiti senza registrazione. Giochi gratuiti senza download, senza
                  registrazione è un altro vantaggio. Inoltre, puoi anche giocare a giochi gratuiti. Inoltre, puoi
                  trovare vari giochi bonus e goderti giri gratuiti. Questi giochi sono il modo migliore per acquisire
                  conoscenze di gioco. È anche privo di rischi con denaro reale. Preparati a giocare a giochi di frutta
                  per divertimento. Puoi accedere a questa fantastica raccolta di giochi su desktop e dispositivi
                  mobili.
                </p>
              </div>
            </div>
            <div class="siamo__image" data-da=".siamo__item, 991, 1">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="diablo" id="games">
        <div class="container">
          <ul class="diablo__list">
            <li class="diablo__item">
              <div class="diablo__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="diablo__link" href="game-1.php">
                Diablo Reels
              </a>
              <a class="diablo__play" href="game-1.php">
                Giocare a
              </a>
            </li>
            <li class="diablo__item">
              <div class="diablo__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="diablo__link" href="game-2.php">
                Willys Hot Chillies
              </a>
              <a class="diablo__play" href="game-2.php">
                Giocare a
              </a>
            </li>
            <li class="diablo__item">
              <div class="diablo__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="diablo__link" href="game-3.php">
                Rabbit Hole Riches
              </a>
              <a class="diablo__play" href="game-3.php">
                Giocare a
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