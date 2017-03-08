function controllaForm_it() {
  var re=/ /g;
  var bd = document.ks_booking_form.bd.value.replace(re, '');
  var ed = document.ks_booking_form.ed.value.replace(re, '');
  var bd_day = bd.substr(0, 2); var bd_slash_1 = bd.substr(2, 1); var bd_month = bd.substr(3, 2); var bd_slash_2 = bd.substr(5, 1); var bd_year = bd.substr(6, 4);
  var ed_day = ed.substr(0, 2); var ed_slash_1 = ed.substr(2, 1); var ed_month = ed.substr(3, 2); var ed_slash_2 = ed.substr(5, 1); var ed_year = ed.substr(6, 4);
  if (bd.length != 10 || isNaN(bd_day) || isNaN(bd_month) || isNaN(bd_year) || bd_slash_1 != "/" || bd_slash_2 != "/") {
    alert("La data deve essere nel formato \"gg/mm/aaaa\""); document.ks_booking_form.bd.focus(); return false;
  }
  if (ed.length != 10 || isNaN(ed_day) || isNaN(ed_month) || isNaN(ed_year) || ed_slash_1 != "/" || ed_slash_1 != "/") {
    alert("La data deve essere nel formato \"gg/mm/aaaa\""); document.ks_booking_form.ed.focus(); return false;
  }
  var bd_date = new Date(bd_year, bd_month - 1, bd_day, 0, 0, 0, 0);
  var ed_date = new Date(ed_year, ed_month - 1, ed_day, 0, 0, 0, 0);
  var today_date = new Date();
  if (ed_date <= bd_date ||
    (bd_date < today_date && bd_date.getFullYear() != today_date.getFullYear() && bd_date.getMonth() != today_date.getMonth() && bd_date.getDate() != today_date.getDate()) ||
    (ed_date < today_date && ed_date.getFullYear() != today_date.getFullYear() && ed_date.getMonth() != today_date.getMonth() && ed_date.getDate() != today_date.getDate())) {
    alert("Controllare le date di arrivo e di partenza"); return false;
  }
}
function controllaForm_it2() {
    var re=/ /g;
    var bd = document.ks_booking_form2.bd.value.replace(re, '');
    var ed = document.ks_booking_form2.ed.value.replace(re, '');
    var bd_day = bd.substr(0, 2); var bd_slash_1 = bd.substr(2, 1); var bd_month = bd.substr(3, 2); var bd_slash_2 = bd.substr(5, 1); var bd_year = bd.substr(6, 4);
    var ed_day = ed.substr(0, 2); var ed_slash_1 = ed.substr(2, 1); var ed_month = ed.substr(3, 2); var ed_slash_2 = ed.substr(5, 1); var ed_year = ed.substr(6, 4);
    if (bd.length != 10 || isNaN(bd_day) || isNaN(bd_month) || isNaN(bd_year) || bd_slash_1 != "/" || bd_slash_2 != "/") {
        alert("La data deve essere nel formato \"gg/mm/aaaa\""); document.ks_booking_form2.bd.focus(); return false;
    }
    if (ed.length != 10 || isNaN(ed_day) || isNaN(ed_month) || isNaN(ed_year) || ed_slash_1 != "/" || ed_slash_1 != "/") {
        alert("La data deve essere nel formato \"gg/mm/aaaa\""); document.ks_booking_form2.ed.focus(); return false;
    }
    var bd_date = new Date(bd_year, bd_month - 1, bd_day, 0, 0, 0, 0);
    var ed_date = new Date(ed_year, ed_month - 1, ed_day, 0, 0, 0, 0);
    var today_date = new Date();
    if (ed_date <= bd_date ||
        (bd_date < today_date && bd_date.getFullYear() != today_date.getFullYear() && bd_date.getMonth() != today_date.getMonth() && bd_date.getDate() != today_date.getDate()) ||
        (ed_date < today_date && ed_date.getFullYear() != today_date.getFullYear() && ed_date.getMonth() != today_date.getMonth() && ed_date.getDate() != today_date.getDate())) {
        alert("Controllare le date di arrivo e di partenza"); return false;
    }
}


function controllaForm_en() {
  var re=/ /g;
  var bd = document.ks_booking_form.bd.value.replace(re, '');
  var ed = document.ks_booking_form.ed.value.replace(re, '');
  var bd_day = bd.substr(0, 2); var bd_slash_1 = bd.substr(2, 1); var bd_month = bd.substr(3, 2); var bd_slash_2 = bd.substr(5, 1); var bd_year = bd.substr(6, 4); 
  var ed_day = ed.substr(0, 2); var ed_slash_1 = ed.substr(2, 1); var ed_month = ed.substr(3, 2); var ed_slash_2 = ed.substr(5, 1); var ed_year = ed.substr(6, 4);
  if (bd.length != 10 || isNaN(bd_day) || isNaN(bd_month) || isNaN(bd_year) || bd_slash_1 != "/" || bd_slash_2 != "/") {
    alert("Date must be in the format \"gg/mm/aaaa\""); document.ks_booking_form.bd.focus(); return false;
  }
  if (ed.length != 10 || isNaN(ed_day) || isNaN(ed_month) || isNaN(ed_year) || ed_slash_1 != "/" || ed_slash_1 != "/") {
    alert("Date must be in the format \"gg/mm/aaaa\""); document.ks_booking_form.ed.focus(); return false;
  }
  var bd_date = new Date(bd_year, bd_month - 1, bd_day, 0, 0, 0, 0);
  var ed_date = new Date(ed_year, ed_month - 1, ed_day, 0, 0, 0, 0);
  var today_date = new Date();
  if (ed_date <= bd_date || 
    (bd_date < today_date && bd_date.getFullYear() != today_date.getFullYear() && bd_date.getMonth() != today_date.getMonth() && bd_date.getDate() != today_date.getDate()) ||
    (ed_date < today_date && ed_date.getFullYear() != today_date.getFullYear() && ed_date.getMonth() != today_date.getMonth() && ed_date.getDate() != today_date.getDate())) {
    alert("Please check the arrival and departure dates"); return false;
  }
}
  
  function controllaForm_fr() {
    var re=/ /g;
    var bd = document.ks_booking_form.bd.value.replace(re, '');
    var ed = document.ks_booking_form.ed.value.replace(re, '');
    var bd_day = bd.substr(0, 2); var bd_slash_1 = bd.substr(2, 1); var bd_month = bd.substr(3, 2); var bd_slash_2 = bd.substr(5, 1); var bd_year = bd.substr(6, 4); 
    var ed_day = ed.substr(0, 2); var ed_slash_1 = ed.substr(2, 1); var ed_month = ed.substr(3, 2); var ed_slash_2 = ed.substr(5, 1); var ed_year = ed.substr(6, 4);
    if (bd.length != 10 || isNaN(bd_day) || isNaN(bd_month) || isNaN(bd_year) || bd_slash_1 != "/" || bd_slash_2 != "/") {
      alert("La date doit �tre au format \"gg/mm/aaaa\""); document.ks_booking_form.bd.focus(); return false;
    }
    if (ed.length != 10 || isNaN(ed_day) || isNaN(ed_month) || isNaN(ed_year) || ed_slash_1 != "/" || ed_slash_1 != "/") {
      alert("La date doit �tre au format \"gg/mm/aaaa\""); document.ks_booking_form.ed.focus(); return false;
    }
    var bd_date = new Date(bd_year, bd_month - 1, bd_day, 0, 0, 0, 0);
    var ed_date = new Date(ed_year, ed_month - 1, ed_day, 0, 0, 0, 0);
    var today_date = new Date();
    if (ed_date <= bd_date || 
      (bd_date < today_date && bd_date.getFullYear() != today_date.getFullYear() && bd_date.getMonth() != today_date.getMonth() && bd_date.getDate() != today_date.getDate()) ||
      (ed_date < today_date && ed_date.getFullYear() != today_date.getFullYear() && ed_date.getMonth() != today_date.getMonth() && ed_date.getDate() != today_date.getDate())) {
      alert("V�rifiez les dates d'arriv�e et de d�part"); return false;
    }
  }