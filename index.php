<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>¡Valóranos!</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
  <script src='main.js'></script>
</head>

<body>
  <script type="text/javascript" src="./script.js"></script>

  <h1>¡Valora el servicio recibido!</h1>
  <form method='post' action=''>
    <div id='caras'>
      <label>
        <div class='cara' id='triste'>
          <div class='ojos-y-boca'>
            <div class='ojos'>
              <div class='ojo'></div>
              <div class='ojo'></div>
            </div>
            <div class='div-boca'>
              <div class='boca'></div>
            </div>
          </div>
        </div>
        <input class='radio' type='radio' id='triste' name='cara' onclick='radioSeleccionado()' />
      </label>
      <label>
        <div class='cara' id='neutral'>
          <div class='ojos-y-boca'>
            <div class='ojos'>
              <div class='ojo'></div>
              <div class='ojo'></div>
            </div>
            <div class='div-boca'>
              <div class='boca'></div>
            </div>
          </div>
        </div>
        <input class='radio' type='radio' id='neutral' name='cara' onclick='radioSeleccionado()' />
      </label>
      <label>
        <div class='cara' id='feliz'>
          <div class='ojos-y-boca'>
            <div class='ojos'>
              <div class='ojo'></div>
              <div class='ojo'></div>
            </div>
            <div class='div-boca'>
              <div class='boca'></div>
            </div>
          </div>
        </div>
        <input class='radio' type='radio' id='feliz' name='cara' onclick='radioSeleccionado()' />
      </label>
    </div>
    <div id='siguiente-pantalla' class='oculta'>
      <h2>Cuéntenos el porqué de su valoración</h2>
      <textarea id='texto' placeholder='Escriba sus valoraciones'></textarea>
      <label>
        <p>E-mail</p>
        <input id='correo' type='text' placeholder='Dirección de correo electrónico'/>
      </label>
      <input type='submit' value='Enviar valoración' />
  </form>
</body>

</html>