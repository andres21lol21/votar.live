
document.getElementById("formIS").addEventListener("submit", function(event) {
    // en esta seccion traemos los valores que se reciben en 
    // el inicio de sesion y eliminamos los espacios en blanco usando el metodo value.trim 
    let correo = document.getElementById("correo").value.trim();

    let contrasena = document.getElementById("contrasena").value.trim();
//   aqui verificamos si algunos de los dos campos se encuentra vacio usando el operador || (or) 
//   y si lo esta prevenimos que se envie el formulario usando event.preventDefult y luego mostramos una alerta
//   notificando el error al usuario usando alert()
    if (correo == '' || contrasena == ''){
        event.preventDefault();

        alert("por favor llene los campos con su correo y contraseña");
    }

});
