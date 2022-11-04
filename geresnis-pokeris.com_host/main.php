<?php
include 'header.php';
?>
    <main>
      <section class="yilop">
        <div class="container">
          <div class="yilop__content">
            <div class="yilop__body">
              <span class="yilop__span">
                Nāciet uz mūsu labāko izklaides platformu
              </span>
              <h1 class="yilop__title">
                Labākās spēles
              </h1>
              <a class="yilop__link" href="#games">
                Spēlēt
              </a>
            </div>
            <p class="yilop__descleimer">
              Vietnē piedāvātās spēles nedod lietotājiem iespēju laimēt reālu naudu.
              <span>
                Vietne nesniedz lietotājiem prasmes, kuras var izmantot īstās azartspēlēs. Spēles ir pieejamas
                lietotājiem, kas vecāki par 18 gadiem.
              </span>
            </p>
          </div>
        </div>
      </section>
      <section class="speles" id="games">
        <div class="container">
          <h2 class="speles__title">
            Mūsu spēles
          </h2>
          <ul class="speles__list">
            <li class="speles__item speles__item_1">
              <a class="speles__link" href="game-1.php">
                Yummy Wilds
              </a>
            </li>
            <li class="speles__item speles__item_2">
              <a class="speles__link" href="game-2.php">
                Super Sweets
              </a>
            </li>
            <li class="speles__item speles__item_3">
              <a class="speles__link" href="game-3.php">
                Gems Bonanza
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="mums" id="about">
        <div class="mums__container container">
          <div class="mums__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
          </div>
          <div class="mums__descr">
            <h2 class="mums__title">
              Par mums
            </h2>
            <p class="mums__text">
              Mēs esam orientēti uz visplašāko azartspēļu izklaides cienītāju loku, īpaši tiem, kam patīk spēlēt spēles.
              Mums ir daudz spēļu, un kolekcija tiek pastāvīgi atjaunināta ar jauniem jaunumiem. Visas spēles ir
              pieejamas bezmaksas režīmā. Tas ir īpaši noderīgi iesācējiem. Un profesionāļi var nekavējoties ienirt tīrā
              azartspēļu atpūtā ar izklaidējošām spēlēm.Azartspēļu biznesa straujā attīstība liek ražotājiem izdot
              jaunas spēles ar augstas kvalitātes grafiku, īpaši atlasītu mūziku un sižetu. Izstrādātāji sadarbojas ar
              filmu kompānijām, lai izveidotu spēles ar pazīstamiem varoņiem, nodrošinot atjauninātas rakstzīmju
              nomešanas tehnikas, pielāgojot spēli maziem mobilo tālruņu un planšetdatoru ekrāniem.
            </p>
          </div>
        </div>
      </section>
      <section class="vorteile" id="benefits">
        <div class="container">
        <h2 class="vorteile__title">
        priekšrocības
          </h2>
          <ul class="vorteile__list">
            <li class="vorteile__item">
              <h2 class="vorteile__subtitle">
                Spēle bez ierobežojumiem
              </h2>
              <p class="vorteile__text">
                Visas spēles ir pilnīgi bez maksas, atlikums tiek automātiski papildināts, un jums nav jāuztraucas par
                savu kontu.
              </p>
            </li>
            <li class="vorteile__item">
              <h2 class="vorteile__subtitle">
                Mūsdienu spēles
              </h2>
              <p class="vorteile__text">
                Ja esat noguris no novecojušas grafikas un klasiskām spēlēm, mūsu vietne ir tas, kas jums nepieciešams
              </p>
            </li>
            <li class="vorteile__item">
              <h2 class="vorteile__subtitle">
                Spēlējiet jebkurā ierīcē
              </h2>
              <p class="vorteile__text">
                Mūsu spēles ir pieejamas jebkurā laikā un vietā jūsu sīkrīkos
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>