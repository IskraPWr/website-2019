<?php
   require_once "../content/creator.php";
   
   //do ustawienia: title description, keywords, homepage
   //default:
   //title-> SKTT Iskra PWr;
   //description-> "Odkryj Naszą Szkołę Tańca, daj sie porwać rytmowi, spotkaj nowych ludzi i poznaj przyjemniejszą strone studiowania już dziś!"
   //keywords-> taniec, taniec towarzyski, Pwr, Iskra, Wrocław, hobby, dance
   //homapage-> false;
   
   $data['title'] = 'Składki członkowskie';
   
   $page = new Creator($data);
   echo $page->getBeginning();
?>

<div class="wrapper row3">
   <main class="hoc container clear">
      <!-- main body -->
      <div class="content overflow">
         <h1>Składki członkowskie</h1>
         <p>Aby zostać aktywnym członkiem SKTT Iskra PWr należy opłacać składki semestralne.
            Składki wykorzystywane są w celach statutowych.
            Status aktywnego członka upoważnia Cię do uczestnictwa w zajęciach organizowanych przez nasz klub.
            Ilość zajęć, w których możesz uczestniczyć zależny jest o wysokości Twojej składki.
            Regulamin wpłaty składek znajduję się <a target="_blank" href="../files/REGULAMIN.pdf">tutaj</a>.
         </p>
         </br>

                <div>
    <section class="charges clear">

      <div class="sectiontitle">
        <p class="font-x1">Wpłaty Składek Członkowskich należy dokonywać poprzez portal <a target="_blank" href="https://polibudka.pl">Polibudka</a> za pomocą podanych linków:</p>

      </div>
      <ul class="nospace group elements padding">
        <li class="one_third first">
          <article>
           <a target="_blank" href="https://polibudka.pl/pl/p/Skladka-Czlonkowska-SKTT-PWr-dla-nowych-czlonkow/259?preview=true">
            <i class="fas fa-money-bill-wave"></i>
            </a>
            <h6 class="heading">Wpisowe</h6>
            <a target="_blank" href="https://polibudka.pl/pl/p/Skladka-Czlonkowska-SKTT-PWr-dla-nowych-czlonkow/259?preview=true">
            <p>Opłata dla osób dołączających do Naszego Klubu</p>
            </a>
          </article>
        </li>
        <li class="one_third">
          <article>
          <a target="_blank" href="https://polibudka.pl/pl/p/OPLATA-SKLADKI-CZLONKOWSKIEJ-SKTT-%E2%80%9EISKRA-PWr/260?preview=true">
            <i class="fas fa-user-check"></i>
            </a>
            <h6 class="heading">Studenci PWr</h6>
            <a target="_blank" href="https://polibudka.pl/pl/p/OPLATA-SKLADKI-CZLONKOWSKIEJ-SKTT-%E2%80%9EISKRA-PWr/260?preview=true">
            <p>Opłata Składki Członkowskiej dla studentów Politechniki Wrocławskiej</p>
        </a>
          </article>
        </li>
        <li class="one_third">
          <article>
          <a target="_blank" href="https://polibudka.pl/pl/p/OPLATA-SKLADKI-CZLONKOWSKIEJ-SKTT-%E2%80%9EISKRA-PWr-dla-pozostalych-czlonkow-/261?preview=true">
             <i class="fas fa-user-tie"></i>
            </a>
            <h6 class="heading">Pozostali Członkowie </h6>
            <a target="_blank" href="https://polibudka.pl/pl/p/OPLATA-SKLADKI-CZLONKOWSKIEJ-SKTT-%E2%80%9EISKRA-PWr-dla-pozostalych-czlonkow-/261?preview=true">
            <p>Opłata Składki Członkowskiej dla osób spoza Politechniki Wrocławskiej</p>
            </a>
          </article>
        </li>
      </ul>
    </section>
  </div>

         <div class=" overflow">
            <table class="cashtable";>
               <caption>TABELA OPŁAT SEMESTRALNYCH</caption>
               <tr>
                  <td></td>
                  <th>Studenci PWr</th>
                  <th>Pozostali członkowie</th>
               </tr>
               <tr>
                  <th>JEDEN blok zajęć/tydzień</th>
                  <td>150 PLN</td>
                  <td>230 PLN</td>
               </tr>
               <tr>
                  <th>DWA bloki zajęć/tydzień</th>
                  <td>210 PLN</td>
                  <td>290 PLN</td>
               </tr>
               <tr>
                  <th>TRZY bloki zajęć/tydzień</th>
                  <td>230 PLN</td>
                  <td>310 PLN</td>
               </tr>
               <tr>
                  <th>CZTERY bloki zajęć/tydzień</th>
                  <td>280 PLN</td>
                  <td>360 PLN</td>
               </tr>
               <tr>
                  <th>PIĘĆ bloki zajęć/tydzień</th>
                  <td>330 PLN</td>
                  <td>410 PLN</td>
               </tr>
               <tr>
                  <th>SZEŚĆ bloki zajęć/tydzień</th>
                  <td>360 PLN</td>
                  <td>440 PLN</td>
               </tr>
               <tr>
                  <th>BEZ OGRANICZEŃ</th>
                  <td>420 PLN</td>
                  <td>500 PLN</td>
               </tr>
            </table>
         </div>
         <p>Przykład 1: Jeśli jesteś studentem PWr i opłaciłeś składkę w wysokości 210zł możesz uczestniczyć na przykład w zajęciach:
            – w poniedziałek grupa podstawowa oraz w czwartek grupa podstawowa,
            – w poniedziałek grupa średnio-zaawansowana oraz w poniedziałek grupa zaawansowana,
            – we wtorek grupa podstawowa+ oraz w środę grupa średnio zaawansowana.
            </br>
            Przykład 2: Jeśli nie jesteś studentem PWr i opłaciłeś składkę w wysokości 310zł możesz uczestniczyć na przykład w zajęciach:
            – w poniedziałek grupa podstawowa, wtorek grupa podstawa+ oraz w czwartek grupa podstawowa,
            – w poniedziałek grupa średnio zaawansowana, w poniedziałek grupa zaawansowana oraz w środę grupa zaawansowana
            – w poniedziałek grupa średnio zaawansowana, we wtorek grupa podstawowa+ oraz w środę grupa średnio zaawansowana.
</p>
         </br></br>
         <div class=" overflow">
            <table class="cashtable";>
               <caption>PODZIAŁ NA RATY</caption>
               <tr>
                  <td></td>
                  <th colspan="3">Studenci PWr</th>
                  <th colspan="3">Pozostali członkowie</th>
               </tr>
               <tr>
                  <td></td>
                  <th>I Rata</th>
                  <th>II Rata</th>
                  <th>III Rata</th>
                  <th>I Rata</th>
                  <th>II Rata</th>
                  <th>III Rata</th>
               </tr>
               <tr>
                  <th>1 bl./tydz.</th>
                  <td>60 PLN</td>
                  <td>50 PLN</td>
                  <td>40 PLN</td>
                  <td>80 PLN</td>
                  <td>80 PLN</td>
                  <td>70 PLN</td>
               </tr>
               <tr>
                  <th>2 bl./tydz.</th>
                  <td>80 PLN</td>
                  <td>70 PLN</td>
                  <td>60 PLN</td>
                  <td>100 PLN</td>
                  <td>100 PLN</td>
                  <td>90 PLN</td>
               </tr>
               <tr>
                  <th>3 bl./tydz.</th>
                  <td>80 PLN</td>
                  <td>80 PLN</td>
                  <td>70 PLN</td>
                  <td>110 PLN</td>
                  <td>100 PLN</td>
                  <td>100 PLN</td>
               </tr>
               <tr>
                  <th>4 bl./tydz.</th>
                  <td>100 PLN</td>
                  <td>100 PLN</td>
                  <td>80 PLN</td>
                  <td>130 PLN</td>
                  <td>120 PLN</td>
                  <td>110 PLN</td>
               </tr>
               <tr>
                  <th>5 bl./tydz.</th>
                  <td>110 PLN</td>
                  <td>110 PLN</td>
                  <td>110 PLN</td>
                  <td>140 PLN</td>
                  <td>140 PLN</td>
                  <td>130 PLN</td>
               </tr>
               <tr>
                  <th>6 bl./tydz.</th>
                  <td>130 PLN</td>
                  <td>120 PLN</td>
                  <td>110 PLN</td>
                  <td>150 PLN</td>
                  <td>150 PLN</td>
                  <td>140 PLN</td>
               </tr>
               <tr>
                  <th>B/O</th>
                  <td>150 PLN</td>
                  <td>140 PLN</td>
                  <td>130 PLN</td>
                  <td>170 PLN</td>
                  <td>170 PLN</td>
                  <td>160 PLN</td>
               </tr>
            </table>
         </div>
         </br></br>
         <div class=" overflow">
            <table class="cashtable";>
               <caption>HARMONOGRAM PŁATNOŚCI RAT</caption>
               <tr>
                  <td></td>
                  <th>I Rata</th>
                  <th>II Rata</th>
                  <th>III Rata</th>
               </tr>
               <tr>
                  <th>Semetr zimowy</th>
                  <td>12.11.2018r.</td>
                  <td>03.12.2018r.</td>
                  <td>07.01.2019r.</td>
               </tr>
               <tr>
                  <th>Semetr letni</th>
                  <td>01.04.2019r.</td>
                  <td>06.05.2019r.</td>
                  <td>03.06.2019r.</td>
               </tr>
            </table>
         </div>
         <p>W przypadku, jeżeli chcesz dołączyć do SKTT ISKRA PWr, musisz uiścić jednorazową opłatę wpisową w wysokości <b>40 zł</b>
            (opłata jest niezależna od statutu studenckiego).
         </p>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
   </main>
</div>
<?=$page->getEnd();?>