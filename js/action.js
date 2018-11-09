// #### RELOGIO
var Elem = document.getElementById("Clock");

function Horario() {
    var Hoje = new Date();
    var Horas = Hoje.getHours();
    if (Horas < 10) {
        Horas = "0" + Horas;
    }
    var Minutos = Hoje.getMinutes();
    if (Minutos < 10) {
        Minutos = "0" + Minutos;
    }
    var Segundos = Hoje.getSeconds();
    if (Segundos < 10) {
        Segundos = "0" + Segundos;
    }
    Elem.innerHTML = Horas + ":" + Minutos + ":" + Segundos;
}
window.setInterval("Horario()", 1000);
moment.locale('pt-BR');


$(document).ready(function(){
    $date = moment().format('ll');
    $(".day_month_year").html($date); 
 });
 // RELOGIO

// WHATSAPP
function isMobile()
{
var userAgent = navigator.userAgent.toLowerCase();
if( userAgent.search(/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i)!= -1 )
  return true;
}

$isMobile = isMobile();

$(document).ready(function(){
    if($isMobile == true){  
     $(".link-whatsapp").attr("href", "whatsapp://send?phone=5511972182492");         
    }else{
     $(".link-whatsapp").attr("href", "https://web.whatsapp.com/send?phone=5511972182492"); 
    }
    });
    // WHATSAPP