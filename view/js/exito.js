function exito(){ 
Swal.fire({
    title: "SEGURO DESEAS CERRAR SESION?",
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: "Si",
    denyButtonText: `No`
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        window.location.href = '../../controller/ControllerCSesion.php';
    } else if (result.isDenied) {
      Swal.fire("Operación cancelada", "", "info");
    }
  });
}