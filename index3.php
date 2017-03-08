
<?php
$base = basename($_SERVER["REQUEST_URI"]);
$base=explode('.',$base)[0];
?>

<header class="header_area">

    <!-- start main header -->
    <div class="main_header_area">
        <div class="site_logo fix">

            <!-- <div class="header_login floatleft">
             </div>-->
        </div>
        <a id="brand" style="float: left" href="index.php"><img src="images/logo22.png" alt="Logo" width="493" height="112"></a>
        <div class="container">

            <!-- start mainmenu & logo -->
            <div class="mainmenu">
                <div id="nav">
                    <nav class="navbar navbar-default">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>



                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" >

                            </div>
                        </div>
                        <ul class="nav navbar-nav" style="margin-right:50px">
                            <li><a href="index.php">Home</a></li>
                            <!--                                <li><a href="dormire.php">Dormire</a></li>-->
                            <li role="presentation" class="dropdown">
                                <a id="drop2" href="dormire.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    Dormire
                                </a>
                                <ul id="menu2" class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="village.php">Stanza “Village”</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="lake.php">Stanza “Lake”</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="solarium.php">Stanza “Solarium Superior”</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="garden.php">Stanza “Garden Superior”</a></li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a id="drop2" href="mangiare.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    Mangiare
                                </a>
                                <ul id="menu2" class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="mangiare.php">Colazione-Mezza pensione</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="doppia.html">La Terrazza del Panorama</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="mini-suite.html">Eventi</a></li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    Servizi
                                </a>
                                <ul id="menu2" class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="colazione_mezzapensione.php">Piscina-Biciclette</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="doppia.html">Nordic walking</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="mini-suite.html">Voucher regalo</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="mini-suite.html">Spettacoli ed escursioni</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="mini-suite.html">Taxi transfet</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="mini-suite.html">Animali domestici</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Offerte</a></li>
                            <li><a href="contatti.html">Dintorni</a></li>


                            <?php
                            if ($base != 'index' && $base != 'panorama' && $base != ''){
                                echo '
                                       <button class="uk-button uk-button-default uk-margin-small-right mioBut" type="button" uk-toggle="target: #modal-example">Miglior prezzo Garantito</button>
                            <div id="modal-example" uk-modal>
                            <div class="uk-modal-dialog">
                          <button class="uk-modal-close-default" type="button" uk-close></button>
                               <div class="uk-modal-header">
                                    <h2 class="uk-modal-title">Verifica Disponibilità/Miglior Prezzo Garantito</h2>
                             </div>
                                <div class="uk-modal-body">
                                   
                                    <p>Prenotando direttamente dal nostro sito ufficiale potrete avere sempre il prezzo migliore e potrete comunicarci le Vostre esigenze particolari.</p>
                                     
                                </div> 
                                <div class="uk-modal-footer">
                                    <p class="uk-text-right">
                                        <button class="uk-button uk-button-primary" type="button" onclick="window.location.href=\'dormire.php\'">Continua!</button>
                                    </p>
                                    </div>
                                </div>
                            </div>
                                ';
                            }else{
                                echo '
                                    <button class="uk-button mioBut " data-uk-modal="{target:\'#my-id\'}">Miglior prezzo Garantito</button>

                            <div id="my-id" class="uk-modal" data-uk-modal="{center:true}">
                                <div class="uk-modal-dialog">
                                    <a class="uk-modal-close uk-close"></a>
                                    <div class="uk-modal-header"><h2 class="uk-modal-title">VERIFICA DISPONIBILITA’/MIGLIOR PREZZO GARANTITO</h2></div>
                                    Prenotando direttamente dal nostro sito ufficiale potrete avere sempre il prezzo migliore e potrete comunicarci le Vostre esigenze particolari.
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="uk-button uk-button-primary mioBut2" onclick="window.location.href=\'dormire.php\'">Continua!</button>
                                    </div>
                                </div>
                            </div>                              
                              ';

                            }
                            ?>
                        </ul>





                        <!-- /.navbar-collapse --><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <!-- end mainmenu and logo -->
        </div>
    </div>
    <!-- end main header -->

</header>