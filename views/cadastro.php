<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastro</title>
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
        <section class="sectionCad">
            <div class="cadContainer">
                <div class="cadContent">
                    <form id="formCad" class="cadForm">
                        <h3 class="cadTitle cad-screen-title">Cadastro</h3>
    
                        <label for="email" class="cadLabel">Email</label><br>
                        <input type="email" placeholder="voltaic@email.com" name="email" class="cadInput" id="email" required>
            
                        <label for="senha" class="cadLabel">Senha</label><br>
                        <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="senha" class="cadInput" id="senha" required>

                        <label for="tipo_usuario" class="cadLabel">Tipo de usuário</label><br>
                        <select name="tipo_usuario" class="cadselect-in" id="tipo_usuario" required>
                            <option value="0" selected disabled>Selecione o tipo de usuário</option>
                            <option value="1">Pessoa Física</option>
                            <option value="2">Pessoa Jurídica</option>
                            <option value="3">Prestador de Serviços</option>
                        </select> 
    
                        <label for="endereco" class="cadLabel">Endereço</label><br>
                        <input type="text" name="endereco" class="cadInput" id="endereco" required> 
            
                        <button type="submit" class="btn btnCadastrar">Enviar</button> 
                    </form>

                    <p class="cadLogin">Já tem uma conta? <a class="login" href="login.php">Faça login.</a></p>
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
    <script type="text/javascript" src="../js/cadUser.js"></script>
    <script type="text/javascript" src="../js/showCadData.js"></script>
</body> 
</html>