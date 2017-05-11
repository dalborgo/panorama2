
<?php
$base = basename($_SERVER["REQUEST_URI"]);
$base=explode('.',$base)[0];
?>



<header class="header_area">

    <!-- start header top -->
    <!--<div class="header_top_area">
        <div class="container">
            <div class="row">
                <div class="header_top clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="left_header_top">
                            <ul>
                                <li><a href="#"><img src="img/temp-icon.png" alt="temp-icon">London dc, GR 17°C</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 floatright">
                        <div class="right_header_top clearfix floatright">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a class="border-right-dark-4" href="#">login</a></li>
                                <li role="presentation" class="dropdown">
                                    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                        register
                                        <span class="caret"></span>
                                    </a>
                                    <!-- <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- end header top  -->

    <!-- start main header -->
    <div class="main_header_area person" style="">
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
                        <!-- <div class="header_login floatleft">
                                                            <ul>
                                                                <li><a id="brand" class="clearfix navbar-brand hidden-md hidden-sm" href="index.php"><img src="images/logo22.png" alt="Logo" width="493" height="112"></a></li>
                                                                <li class="hidden-lg hidden-xs"><a id="brand" class="clearfix navbar-brand" href="index.php"><img src="images/logo23.png" alt="Logo" width="88" height="112"></a></li>
                                                            </ul>
                                                        </div>-->


                        <!--   <div class="header_login floatleft">

                              <ul>
                                  <li> <a href="index.html"></a></li>
                              </ul>
                          </div>-->
                        <!--  <div class="site_logo fix">
                              <a id="brand" class="clearfix navbar-brand" href="index.php"><img src="images/logo22.png" alt="Logo" width="493" height="112"></a>
                              <div class="header_login floatleft">
                                  <ul>
                                      <li><a href="#">Login</a></li>
                                      <li><a href="#">Register</a></li>
                                  </ul>
                              </div>
                          </div>-->

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav floatright">
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
                                <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    Mangiare
                                </a>
                                <ul id="menu2" class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="colazione.php">Colazione</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="mezzapensione.php">Mezza pensione</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="terrazza.php">La Terrazza del Panorama</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="eventi.php">Eventi</a></li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    Servizi
                                </a>
                                <ul id="menu2" class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="piscina.php">Piscina</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="biciclette.php">Biciclette</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="nordic_walking.php">Nordic walking</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="voucher.php">Voucher regalo</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="spettacoli.php">Spettacoli ed escursioni</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="taxi.php">Taxi transfet</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="pets.php">Animali domestici</a></li>
                                </ul>
                            </li>
                            <li><a href="offerte.php">Offerte</a></li>
                            <li><a href="dintorni.php">Dintorni</a></li>
                            <li role="presentation" class="dropdown" >
                                <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                    Info
                                </a>
                                <ul id="menu2" class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="come_raggiungerci.php">Come raggiungerci</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="condizioni_generali.php">Condizioni Generali e<br>politiche di cancellazione</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="richiesta_informazioni.php">Richiesta informazioni</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="dicono_di_noi.php">Dicono di noi</a></li>
                                </ul>
                            </li>
                                <li><a href="tel:0457225102" title="tel: +39 045 7225102" uk-tooltip="pos: bottom-left" data-uk-tooltip="{pos:'bottom'}"><i class="fa fa-phone"></i></a></li>




                            <?php
                            if ($base != 'index' && $base != 'panorama' && $base != ''){
                                echo '
                                       <li><button class="uk-button uk-button-default uk-margin-small-right mioBut" type="button" uk-toggle="target: #modal-example">Miglior prezzo Garantito</button></li>
                            <div id="modal-example" uk-modal>
                            <div class="uk-modal-dialog" style="width: 600px;">
                          <button class="uk-modal-close-default" type="button" uk-close></button>
                               <div class="uk-modal-header">
                                    <h2 class="uk-modal-title">Verifica Disponibilità/Miglior Prezzo Garantito</h2>
                             </div>
                                <div class="uk-modal-body">
                                   
                                    <p>Prenotando direttamente dal nostro sito ufficiale potrete avere sempre il prezzo migliore e potrete comunicarci le Vostre esigenze particolari.</p>
                                     
                                </div> 
                                <div class="uk-modal-footer">
                                    <p class="uk-text-right">
                                        <button class="uk-button uk-button-primary" type="button" onclick="window.location.href=\'village.php\'">Continua!</button>
                                    </p>
                                    </div>
                                </div>
                            </div>
                                ';
                            }else{
                                echo '
                                    <li><button class="uk-button mioBut " data-uk-modal="{target:\'#my-id\'}">Miglior prezzo Garantito</button></li>

                            <div id="my-id" class="uk-modal" data-uk-modal="{center:true}">
                                <div class="uk-modal-dialog">
                                    <a class="uk-modal-close uk-close"></a>
                                    <div class="uk-modal-header"><h2 class="uk-modal-title">VERIFICA DISPONIBILITA’/MIGLIOR PREZZO GARANTITO</h2></div>
                                    Prenotando direttamente dal nostro sito ufficiale potrete avere sempre il prezzo migliore e potrete comunicarci le Vostre esigenze particolari.
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="uk-button uk-button-primary mioBut2" onclick="window.location.href=\'village.php\'">Continua!</button>
                                    </div>
                                </div>
                            </div>                              
                              ';

                            }
                            ?>
                            <a href="#" title="Italiano"><img src="images/ita.gif" alt="Italiano" width="20" style="display: inline;padding: 16px 0px;margin-left: 11px"></a>
                            <a href="#" title="English"><img src="images/eng.gif" alt="English" width="20" style="display: inline;padding: 16px 0px"></a>
                            <a href="#" title="Deutsch"><img src="images/ger.gif" alt="Deutsch" width="20" style="display: inline;padding: 16px 0px"></a>
                            <a href="#" title="Français"><img src="images/fra.gif" alt="Français" width="20" style="display: inline;padding: 16px 0px"></a>
                        </ul>
                        <!--  <div class="emergency_number">
                          </div>-->

                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
        <!-- end mainmenu and logo -->

    </div>
    <!-- end main header -->

</header>
<!-- end header -->


