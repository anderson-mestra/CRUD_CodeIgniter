function validacionCorreo() {
  valor = document.getElementById("correoInput").value;
  if (!/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) {
    return alert('Formato invalido');
  }
}
