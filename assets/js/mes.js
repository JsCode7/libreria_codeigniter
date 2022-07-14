let mes;
let estacion;
switch (new Date().getMonth()) {
  case 0:
    mes = "Enero";
    break;
  case 1:
    mes = "Febrero";
    break;
  case 2:
    mes = "Marzo";
    break;
  case 3:
    mes = "Abril";
    break;
  case 4:
    mes = "Mayo";
    break;
  case 5:
    mes = "Junio";
    break;
  case 6:
    mes = "Julio";
    break;
  case 7:
    mes = "Agosto";
    break;
  case 8:
    mes = "Septiembre";
    break;
  case 9:
    mes = "Octubre";
    break;
  case 10:
    mes = "Noviembre";
    break;
  case 11:
    mes = "Diciembre";
    break;
}

const hora = new Date().getHours();
let saludo;
if (hora < 10) {
  saludo = "Buenos días";
} else if (hora < 20) {
  saludo = "Buenas tardes";
} else {
  saludo = "Buenas noches";
}

document.getElementById("mes-js").innerHTML = saludo + " Aprovecha las ofertas del mes de " + mes ;