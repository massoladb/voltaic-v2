<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <nav id="navbar">
        <div class="logo">
            <a href="index.php"><img src="../img/voltaic_logo_secundario_fundo_preto.png" alt="logo da Voltaic Technology"></a>
        </div>
        <div class="nav-items">
            <ul class="nav-links">
                <li><a href="index.php">Página inicial</a></li>
                <li><a href="#">Solicite agora</a></li>
                <li><a href="#">Informação</a></li>
                <a href="login.php"><button class="btn">Entrar</button></a>
            </ul>
        </div>
    </nav>
    <main>
        <section class="sectionLogin">
            <div class="leftSide">
                <picture>
                    <source src="../img/painel_solar.png"></source>
                    <img src="../img/painel_solar.png" alt="Painel Solar" id="img-login">
                </picture>
            </div>
            <div class="rightSide rSide">
                <div class="loginContainer">
                    <div class="loginContent">
                        <h3 class="cadTitle loginTitle">Bem-Vindo Novamente!</h3>
                        <form id="formLogin" class="cadForm">
                            <label for="email" class="cadLabel">Email</label><br>
                            <input type="email" placeholder="voltaic@email.com" name="email" class="cadInput loginInput" id="email" required>
                            <label for="senha" class="cadLabel">Senha</label><br>
                            <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="senha" class="cadInput loginInput" id="senha" required>
                            <button type="submit" class="btn btnCadastrar btnLogin">Entrar</button>
                        </form>
                        <p class="cadLogin">Não tem uma conta? <a class="login" href="cadastro.php">Cadastre-se agora.</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/voltaic.technolgy/"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/massoladb/voltaic-reformed"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/VoltaicDS"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/100088201811934/"><i class="fab fa-facebook"></i></a>
        </div>
    
        <ul class="list">
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Termos</a></li>
            <li><a href="#">Política de privacidade</a></li>
        </ul>

        <p class="copyright">Voltaic Technology @ 2022</p>
    </footer>
    <script type="text/javascript" src="../js/loginUser.js"></script>
</body> 
</html>