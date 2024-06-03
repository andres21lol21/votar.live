function verificarEstado(event, estado) {
  if (estado === 'desactiva') {
      event.preventDefault();  // Previene que el enlace sea seguido
      alert("Urna cerrada, no es posible abrir");
      window.location.href = '/proyecto/view/Votante/inicio.php';
  }
}
