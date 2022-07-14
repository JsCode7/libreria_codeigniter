//===
// Variables
//===
const fecha_target = new Date('06/20/2022 00:00 AM');
// Selector de span
const spanDias = document.querySelector('span#days');
const spanHoras = document.querySelector('span#hours');
const spanMinutos = document.querySelector('span#minutes');
const spanSegundos = document.querySelector('span#seconds');
// Milisegundos para los cálculos
const milisegundosDeunSegundo = 1000;
const milisegundosDeunMinuto = milisegundosDeunSegundo * 60;
const milisegundosDeunaHora = milisegundosDeunMinuto * 60;
const milisegundosDeunDia = milisegundosDeunaHora * 24

//===
// Funciones
//===

/**
 * Metodo para Updatear el countdown
 */
function updateCountdown() {
    // Calculos
    const ahora = new Date()
    const duracion = fecha_target - ahora;
    const diasFaltantes = Math.floor(duracion / milisegundosDeunDia);
    const horasFaltantes = Math.floor((duracion % milisegundosDeunDia) / milisegundosDeunaHora);
    const minutosFaltantes = Math.floor((duracion % milisegundosDeunaHora) / milisegundosDeunMinuto);
    const segundosFaltantes = Math.floor((duracion % milisegundosDeunMinuto) / milisegundosDeunSegundo);

    // Render
    spanDias.textContent = diasFaltantes;
    spanHoras.textContent = horasFaltantes;
    spanMinutos.textContent = minutosFaltantes;
    spanSegundos.textContent = segundosFaltantes;
}

//===
// Inicializar
//===
updateCountdown();
// Refrescar cada segundo
setInterval(updateCountdown, milisegundosDeunSegundo);

