<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel= "icon" href=
    https://raw.githubusercontent.com/MicaelliMedeiros/micaellimedeiros/master/image/computer-illustration.png
    />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>Login</title>
</head>
<body>


    <main id="container">
        <form id="login_form" action="../Controller/login.php" method="POST">
            <!-- FORM HEADER -->
            <div id="form_header">
               <a href="https://link-net.netlify.app/"><ion-icon name="arrow-back-circle-outline"></ion-icon></a></span> 
               <h1>Acesse <br> a plataforma</h1>
                
            </div>

            <!-- SOCIAL MEDIA LINKS -->
            <div id="social_media">
                <!-- FACEBOOK -->
                <a href="#">
                    <img src="../assets/facebook.png" alt="">
                </a>

                <!-- GOOGLE -->
                <a href="#">
                    <img src="../assets/google.png" alt="Google logo">
                </a>
                
                <!-- GITHUB -->
                <a href="#">
                    <img src="../assets/github.png" alt="">
                </a>
            </div>
            <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
             ?>
            <!-- INPUTS -->
            <div id="inputs">
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="usuario">
                        </div>
                    </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Password
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="senha" name="senha">
                        
                        </div>
                    </label>
                    
                    
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit" id="login_button">
                Login
            </button>

            <div id="forgot_password">
                        <a href="cadastro.php">
                          Criar conta
                        </a>
                    </div>
        </form>
    </main>
</body>
</html>