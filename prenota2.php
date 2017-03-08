<?php
function prenota($tit)
{
    $out = '
<div class="ks_booking hidden-xs" style="position: absolute;z-index: 300;margin-top:0px;width:800px;left: calc(50% - 400px);"> 
       <form name="ks_booking_form" target="_blank" method="post"
              action="https://secure.kosmosol.it/booking/check-availability.php?h=panorama-torridelbenaco&l=it"
              onsubmit="return controllaForm_it();"
        <div class="row">
            <div class="col-lg-12 col-md-12">
                  <b>Data di arrivo</b>&nbsp;

                    <input type="text" id="bd" name="bd" class="it" value=""/>
                    <a href="#"
                           onclick="cal_1.select(document.forms[\'ks_booking_form\'].bd, document.forms[\'ks_booking_form\'].ed, \'ks_booking_cal_1\', \'dd / MM / yyyy\'); return false;"
                           name="ks_booking_cal_1" id="ks_booking_cal_1"><img src="js/ks/ks_booking_calendar.png"
                                                                              width="19" height="20" alt="" border="0"
                                                                              style="margin-left:7px;"/></a>&nbsp;&nbsp;&nbsp;
                   <b>Data di partenza</b>&nbsp;
                   <input type="text" id="ed" name="ed" class="it" value=""/>
                    <a href="#"
                           onclick="cal_2.select(document.forms[\'ks_booking_form\'].ed, null, \'ks_booking_cal_2\', \'dd / MM / yyyy\'); return false;"
                           name="ks_booking_cal_2" id="ks_booking_cal_2"><img src="js/ks/ks_booking_calendar.png"
                                                                              width="19" height="20" alt="" border="0"
                                                                              style="margin-left: 7px;"/></a>
                   &nbsp; &nbsp;&nbsp;<input type="submit" class="button" value="VERIFICA DISPONIBILITA\'"/>
                    <input type="hidden" name="ca" value="1"/>

            </div>

        </form>
      
          
    </div>
 </div>
  
<div class="ks_booking hidden-sm hidden-md hidden-lg" style="margin-top: 0px;width:100%;text-align:center">
      <form name="ks_booking_form" target="_blank" method="post" action="https://secure.kosmosol.it/booking/check-availability.php?h=panorama-torridelbenaco&l=it"  onsubmit="return controllaForm_it();" >
      
      
      <table cellspacing="0" cellpadding="0" border="0" style="margin: 15px 0px 15px 0px;padding:0px;width:100%" >
        <tr>
          <td><b>Data di arrivo</b></td>
        </tr>
        <tr>
          <td><input type="text" id="bd" name="bd" class="it" value="" /><a href="#" onclick="cal_1.select(document.forms[\'ks_booking_form\'].bd, document.forms[\'ks_booking_form\'].ed, \'ks_booking_cal_1\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_1" id="ks_booking_cal_1"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left:7px;" /></a></td>
        </tr>
        <tr>
          <td style="padding-top: 10px;"><b>Data di partenza</b></td>
        </tr>
        <tr>
          <td><input type="text" id="ed" name="ed" class="it" value="" /><a href="#" onclick="cal_2.select(document.forms[\'ks_booking_form\'].ed, null, \'ks_booking_cal_2\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_2" id="ks_booking_cal_2"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left: 7px;" /></a></td>
        </tr>
        

      </table>
      <input type="submit" class="button" value="VERIFICA DISPONIBILITA\'" />
      <input type="hidden" name="ca" value="1" />
      </form>
      
          
    </div>
  <div id="ks_booking_cal_1_div" style="position: absolute; visibility: hidden; background-color: white; z-index:1000;"></div>
  <div id="ks_booking_cal_2_div" style="position: absolute; visibility: hidden; background-color: white; z-index:1000;"></div>
  
    ';
    return $out;
}

?>
