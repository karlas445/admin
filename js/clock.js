var InputFecha = document.getElementById('textfecha');
var InputHora = document.getElementById('textentrada');
var InputHoras = document.getElementById('textsalida');
var fecha_hora = new Date();
var feche = fecha_hora.toLocaleDateString('es-MX');
var hora_entra_salida = fecha_hora.toLocaleTimeString('es-MX');


InputFecha.setAttribute("disabled","");
InputFecha.setAttribute("value", feche);
InputHora.setAttribute("value", hora_entra_salida);
InputHora.setAttribute("disabled","");
InputHoras.setAttribute("value", hora_entra_salida);
InputHoras.setAttribute("disabled","");