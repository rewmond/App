<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Taylor Vargas</title>

    <link rel="icon"
        href=https://raw.githubusercontent.com/MicaelliMedeiros/micaellimedeiros/master/image/computer-illustration.png />

    <!-- <link rel="stylesheet" href="./style.css" />

    <script src="script.js" defer></script> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div id="container">
        <div id="profile">
            <img src="./assets/Avatar.png" alt="Foto de perfil de Taylor Vargas" />
            <p>
                Taylor Vargas Teixeira
            </p>
        </div>

        <div id="switch" onclick="toggleMode()">
            <button></button>
            <span></span>
        </div>

        <ul>
            <li>
                <a href="https://taylorvargas.netlify.app/#home">Portifólio</a>
            </li>
            <li>
                <a class="Yellow" href="./home/bootstrap.php" target="_blank">/Site</a>
            </li>
            <li>
                <a class="" href="https://taylorteixeira.notion.site/Note-2d5cb832762a4e32b780d23d7b04dfe2"
                    target="_blank">Note</a>
            </li>
            <li>
                <a class="red" href="https://1drv.ms/f/s!AgAcv0GqcJBKqwsRvnyugGkPzffQ" target="_blank">//ARQSERVER</a>
            </li>
        </ul>
        <div id="social-links">
            <a href="https://github.com/rewmond">
                <ion-icon name="logo-github"></ion-icon>
            </a>
            <a href="https://www.figma.com/files/user/1194988629708425995?fuid=1194988629708425995">
                <ion-icon name="logo-figma"></ion-icon>
            </a>
            <a href="https://www.instagram.com/taylorvteixeira/"><ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="https://twitter.com/rewmond_"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.linkedin.com/in/taylor-vargas-teixeira-2a9a89247/"><ion-icon
                    name="logo-linkedin"></ion-icon></a>
        </div>
        <footer>Feito por Taylor Vargas</footer>
    </div>
</body>
</html>

<script>
    function toggleMode() {
   const html = document.documentElement

 html.classList.toggle('light')
}
</script>

<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

:root {
  --text-color: white;
  --bg-url: url(./assets/bg-mobile.jpg);
  --stroke-color: rgba(255, 255, 255, 0.5);
  --heighlight-color: rgba(0, 0, 0, 0.2);
  --switch-bg-url: url(./assets/moonStars.svg);
}

.light {
  --text-color: black;
  --bg-url: url(./assets/light-mode.jpg);
  --stroke-color: rgba(0, 0, 0, 0.5);
  --heighlight-color: rgba(0, 0, 0, 0.1);
  --switch-bg-url: url(./assets/Sun.svg);
}

body {
  background: var(--bg-url) no-repeat top center/cover;
}

body * {
  font-family: "Inter", sans-serif;
  color: var(--text-color);
}

#container {
  width: 360px;

  margin: 56px auto 0px auto;
  padding: 0 24px;
}

#profile {
  display: flex;
  text-align: center;
  padding: 24px 0;
  
}

#profile a {
  font-size: 24px;
  padding: 0 16px;
}

#profile img {
  width: 90px;
}

#profile p {
  font-weight: 500;
  line-height: 24px;
  margin: 16px;
}

#switch {
  position: relative;
  width: 64px;

  margin: 4px auto;
}

#switch button {
  width: 32px;
  height: 32px;
  background: white var(--switch-bg-url) no-repeat center;
  border: 0;
  border-radius: 50%;

  position: absolute;
  top: 50%;
  left: 0;
  z-index: 1;
  transform: translateY(-50%);

  animation: slide-back 0.3s;
}

#switch button:hover {
  outline: 10px solid var(--heighlight-color);
}

.light #switch button {
  animation: slide-in 0.3s forwards;
}

#switch span {
  display: block;

  width: 64px;
  height: 24px;

  background: rgba(255, 255, 255, 0.1);

  border: 1px solid var(--stroke-color);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);

  border-radius: 9999px;
}

/* Listas */
ul {
  list-style: none;

  display: flex;
  flex-direction: column;
  gap: 16px;

  padding: 24px 0;
}

ul li a {
  display: flex;
  align-content: center;
  justify-content: center;

  padding: 16px 24px;

  background: rgba(255, 255, 255, 0.1);
  border: 1px solid var(--stroke-color);
  border-radius: 8px;

  text-decoration: none;
  font-weight: 500;

  transition: background 0.2s;
}
.Yellow{
    display: flex;
  align-content: center;
  justify-content: center;

  padding: 16px 24px;

  background: rgba(223, 219, 29, 0.281);
  border: 1px solid rgba(238, 255, 0, 0.377);
  border-radius: 8px;

  text-decoration: none;
  font-weight: 500;

  transition: background 0.2s;

}
.red {
  display: flex;
  align-content: center;
  justify-content: center;

  padding: 16px 24px;

  background: rgba(216, 12, 12, 0.171);
  border: 1px solid rgba(255, 0, 0, 0.274);
  border-radius: 8px;

  text-decoration: none;
  font-weight: 500;

  transition: background 0.2s;
}

ul li a:hover {
  background-color: rgba(255, 255, 255, 0.5);
  border: 1.5px solid var(--text-color);
}

#social-links {
  display: flex;
  justify-content: center;
  gap: 32px;

  padding: 24px 0;

  font-size: 24px;
}

#social-links a {
  display: flex;
  align-items: center;
  justify-content: center;

  transition: background 0.2s;
  border-radius: 50%;
}

/* passar o padding para cima e tirar o gap */

#social-links a:hover {
  background: var(--heighlight-color);
  padding: 16px;
}

footer {
  padding: 24px 0;
  text-align: center;
  font-size: 14px;
}

@keyframes slide-in {
  from {
    left: 0;
  }
  to {
    left: 50%;
  }
}

@keyframes slide-back {
  from {
    left: 50%;
  }
  to {
    left: 0;
  }
}
</style>
=======
<?php

include 'Controller/PessoaController.php';

// Para saber mais sobre a função parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Para saber mais estrutura switch, leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
switch ($url) {
    case '/':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::site();
        break;

    case '/logar':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::index();
        break;

    case '/logar/cadastro':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::cadastro();
        break;

    case '/painel':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::painel();
        break;

    default:
        echo "Erro 404";
        break;
}
>>>>>>> 813433392e054f8fb110df5d97eab84ce3daf1ad
