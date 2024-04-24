function usuarioRegistrado() {
  // Aquí puedes realizar la verificación del usuario (consulta a la base de datos, etc.)
  var xhr = new XMLHttpRequest();

    // Configurar la solicitud
    xhr.open('POST', '../controller/verificarUsuario.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Manejar el evento de cambio de estado
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Analizar la respuesta JSON
            var respuesta = JSON.parse(xhr.responseText);

  // var usuarioRegistrado = false; // Cambia esto según tu lógica de verificación

  // Mostrar el mensaje correspondiente utilizando SweetAlert
  if (usuarioRegistrado) {
      Swal.fire({
          icon: 'warning',
          title: 'Usuario Registrado',
          text: 'El usuario ya está registrado.',
      });
  } else {
      Swal.fire({
          icon: 'success',
          title: 'Registro Exitoso',
          text: 'El usuario se ha registrado correctamente.',
      });
  }
}
