function elementFromHtml(html) {
  const template = document.createElement('template');
  template.innerHTML = html.trim();
  return template.content.firstElementChild;
}

let timeoutId;

function radioSeleccionado() {
  mostrarSiguientePantalla()
  const element = document.documentElement;
  const bottom = element.scrollHeight - element.clientHeight;
  element.scrollTo({ top: bottom, behavior: 'smooth' });
  resetRecargar()

  var radios = document.getElementsByClassName('radio');
  for (let radio of radios) {
    let cara = radio.parentNode.querySelector('.cara')
    if (radio.checked == true) {
      cara.classList.add('cara-seleccionada')
    } else {
      cara.classList.remove('cara-seleccionada')
    }
  }
}

function mostrarSiguientePantalla() {
  document.getElementById('siguiente-pantalla').classList.remove('oculta')
  const texto = document.getElementById('texto');
  const correo = document.getElementById('correo');

  texto.addEventListener('input', resetRecargar);
  correo.addEventListener('input', resetRecargar);
}

function resetRecargar() {
  clearTimeout(timeoutId);
  timeoutId = setTimeout(function() {
    document.location.reload()
  }, 10000);
}