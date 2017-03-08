<?php
$cita="";
$cit = array();$aut = array();
$cit[]='TRADIZIONALE-PERSONALIZZATO “Nel nome tutto ciò che delizierà la vostra vacanza: una vista spettacolare dalla terrazza ristorante e dalle camere non grandissime, ma arredate con gusto e personalità. Lasciatevi tentare anche dalla cucina, i cui piatti sono i migliori sponsor degli ottimi prodotti del territorio.”';
$cit[]='“L’incantevole posizione panoramica sul Garda vale, da sola, il costo del soggiorno; al resto provvedono l’attenzione e la cura dei proprietari i quali propongono anche ai non ospiti dell’albergo un ristorante con specialità a base di pesce e tartufo. Camere caratterizzate con stili d’arredamento e tinte differenti, recentemente rinnovate.”';
$cit[]='“Il 2 giugno 2012 Il Panorama (che ha molti omonimi: attenzione a non sbagliare) compie cinquant\'anni, tutti trascorsi sotto la guida ferma e cortese della famiglia Martinelli. Evoluzione della locanda fondata dai nonni di Teresa, l’attuale patrone, l’albergo-ristorante sorge ad Albisano, frazione collinare di Torri del Benaco con vista impagabile sul lago e sui rilievi della riva lombarda. Potrete lustrarvi gli occhi dalla terrazza dell’hotel, dove in estate si servono sia i pasti principali sia la ricca prima colazione (torte casalinghe, confetture,miele, salumi, formaggi). Le camere sono confortevoli e curate; quelle di più recente allestimento hanno pareti e mobili decorati a mano, letti imbottiti e un terrazzo con roof garden. Su richiesta i gentilissimi Teresa e Mauro vi prenoteranno escursioni e biglietti per spettacoli e musei.”';
$cit[]='“Ad Albisano si trova l’Albergo Ristorante Panorama. Nei giorni di bel tempo dall’ampio terrazzo si gode di una vista da sogno su Torri del Benaco, sullo splendido lago e sull’opposta sponda occidentale, da Salò a Tignale. La cucina casalinga è di buon livello e il servizio dell’albergo a conduzione familiare è cordiale. Ma l’elemento peculiare che caratterizza l’albergo è il panorama, e in particolare l’esperienza indimenticabile regalata dagli splendidi tramonti! Provenendo da Torri del Benaco risalite verso la piazzetta di Albisano e, oltrepassata la chiesa (anche qui si gode di una splendida vista), dopo 50 metri trovate l’hotel e il ristorante a sinistra.”';
$cit[]='“Nel villaggio di Albisano, a sinistra provenendo da Torri del Benaco. Aperto da aprile a ottobre. Doppie a … euro a seconda della stagione e della vista, colazione inclusa. Parcheggio riservato. Nella graziosa frazione di Albisano, sulle alture di Torri del Benaco. Un hotel completamente rinnovato nello stile, dall’arredo sobrio e luminoso, con una superba vista sul lago. Le camere dotate di ogni comfort sono ben arredate, tutte nello stesso stile; optate per quelle con balconcino e vista panoramica. Atmosfera raffinata. Bellissima sala da pranzo. La piscina è certamente una delle più belle della zona. Un bell’indirizzo.”';
$cit[]='“Quest’Hotel/Ristorante con splendida veduta delle montagne e sull’intero lago di Garda,
si trova salendo una strada panoramica con tornanti da Torri del Benaco.”';
$cit[]='“Sinonimo di ospitalità ai più alti livelli, L’Hotel Panorama Ristorante di Via San Zeno 9 ad Albisano di Torri del Benaco(VR) – Tel. 045 7225102 – www.panoramahotel.net – è stato aperto nel 1962 dalla Famiglia Martinelli che lo gestisce da tre generazioni. E’ situato tra il verde degli ulivi e l’azzurro del Lago di Garda. Perfetto per soggiorni in assoluto relax, dispone di parcheggio privato, wifi, piscina e idromassaggio, bar e sale soggiorno. Particolari le camere arredate tutte in stile diverso, affacciate sul lago. Ottimo il ristorante, aperto anche ai clienti esterni, che offre piatti curati e serviti sulla splendida terrazza panoramica. Location ideale per ricorrenze indimenticabili. Non lontano da autostrada, aeroporto e fiera di Verona.”';
$cit[]='“Per idealisti: percorrendo in auto la Gardesana si lascia a sinistra la riviera brulicante di turisti. In alto, sopra la pittoresca Torri del Benaco, sulla sponda orientale del lago, si staglia il borgo di Albisano, con una chiesa e alcune case. Una di queste è l’Hotel Panorama, con un terrazzo che si sviluppa su una superficie quasi uguale a quella dell’albergo. Che si distingue per due aspetti con la stessa attrattività: una vista spettacolare sul lago e sui monti e prezzi molto contenuti.”';
$cit[]='“Hotel Panorama, Lago di Garda – Il nostro esperto è salito al minuscolo borgo di Albisano di Torri del Benaco, perché la guida turistica segnalava che dalla chiesa del luogo si gode della migliore vista sull’azzurro intenso del lago di Garda. E che, nei pressi della chiesa, a una cinquantina di metri, si trovava questo hotel. La porta era aperta. Attraverso la hall lo sguardo si perdeva in un azzurro infinito. Ed era ovvio immaginare che dal terrazzo dell’hotel la visuale dovesse essere ancora più grandiosa. Dato che il nostro esperto aveva già prenotato altrove ha deciso di fare almeno colazione su questo terrazzo. Constatando che l’hotel non era stato chiamato così a caso. Infine ha dato un’occhiata ai prezzi e ha concluso: questo è l’indirizzo giusto per le prossime ferie!”';
$aut[]='Guida Michelin';
$aut[]='Guida Slow Food Locande d’Italia';
$aut[]='Guida Gardasee D';
$aut[]='Guida Kulinarische Entdeckungen am Gardasee D';
$aut[]='Guida Routard Lacs Italiens F';
$aut[]='Guida Gardameer NL';
$aut[]='Rivista Bell’Italia ';
$aut[]='Rivista Faces CH';
$aut[]='Rivista Annabelle CH';

for ($n=0; $n<=count($cit)-1; $n++) {
$cita.="<li>
                                                <h3 class=\"uk-accordion-title\" style=\"font-size:medium;\">".$aut[$n]."</h3>
                                                <div class=\"uk-accordion-content\">
                                                    <blockquote cite=\"#\">
                                                        <p class=\"uk-margin-small-bottom\" style=\"font-size:medium\">".$cit[$n]."</p>
                                                        <footer><cite style=\"font-size:small\">".$aut[$n]."</cite></footer>
                                                    </blockquote>
                                                </div>
                                            </li>";
}

?>