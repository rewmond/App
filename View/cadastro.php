<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel= "icon" href=
    https://raw.githubusercontent.com/MicaelliMedeiros/micaellimedeiros/master/image/computer-illustration.png
    />
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="../Controller/cadastrar.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <?php
                            if(isset($_SESSION['status_cadastro'])):
                        ?>
                        <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="./logar.php">Entrar</a></button>

                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="usuario" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>

                <div class="continue-button">
                    <button type="submit">Continuar </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>