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