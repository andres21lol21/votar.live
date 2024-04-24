// ------poner limite de fecha desde dia actual------------------------------------------------------------
  // Obtener la elemento de fecha de inicio y establecer la fecha mínima
  var fechaInicioInput = document.getElementById("fechaInicio");
  var fechaActual = new Date().toISOString().split("T")[0]; // Fecha actual en formato YYYY-MM-DD
  fechaInicioInput.setAttribute("min", fechaActual);

  // Obtener la elemento de fecha de fin y establecer la fecha mínima
  var fechaFinInput = document.getElementById("fechaFin");
  fechaFinInput.setAttribute("min", fechaActual);

  // Manejar cambios en la fecha de inicio para actualizar la fecha mínima de fin
  fechaInicioInput.addEventListener("change", function() {
    fechaFinInput.setAttribute("min", this.value);
  });
//   ------validacion de fechas en blanco ---------------------------------------------------------------------------------------------

  document.getElementById("formularioUrna").addEventListener("submit", function(event) {
    var fechaInicio = document.getElementById("fechaInicio");
    var fechaFin = document.getElementById("fechaFin");
    // var titulo = document.getElementsByName("titulo");

    // Verificar si alguna de las fechas está vacía
    if (!fechaInicio.value || !fechaFin.value ) {
        alert("Por favor rellene todos los campos antes de continuar.");
        event.preventDefault(); // Evitar que se envíe el formulario si las fechas no son válidas
    }
});
// ----------------validaciones--------------------------------------------
  document.getElementById("formularioUrna").addEventListener("submit",function(event){
    let titulo = document.getElementById("titulo");
    let descripcion = document.getElementById("descripcion")

    // Verificar si alguna de las fechas está vacía
    if (!titulo.value || !descripcion.value) {
        alert("Por favor rellene todos los campos antes de continuar.");
        event.preventDefault(); // Evitar que se envíe el formulario si los datos  estan vacios
  }
});