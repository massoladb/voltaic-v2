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
        <section class="solicitacao">
            <div class="solic-container">
                <div class="solic-content">
                    <h1>Nova Solicitação</h1>
                    <div class="solic-section">

                        <div class="solic-section-title">
                            <h3>Dados do Contratante</h3>
                        </div>

                        <label for="nome-solic" class="cadLabel">Responsável pela Solicitação</label><br>
                        <input type="text" placeholder="Insira o nome completo" name="nome-solic" class="cadInput loginInput" id="nome-solic" required>

                        <label for="tel-solic" class="cadLabel">Telefone</label><br>
                        <input type="number" placeholder="(00) 00000-0000" name="tel-solic" class="cadInput loginInput" id="tel-solic" required>
                    </div>

                    <div class="solic-section">

                        <div class="solic-section-title">
                            <h3>Endereço</h3>
                        </div>

                        <label for="cep-solic" class="cadLabel">CEP</label><br>
                        <input type="number" placeholder="00000-000" name="cep-solic" class="cadInput loginInput" id="cep-solic" required>

                        <label for="estados-solic" class="cadLabel">UF</label><br>
                        <select name="estados-solic" class="cadselect-in" id="estados-solic" required>
                            <option value="0">Selecione o tipo de usuário</option>
                            <option value="1">Pessoa Física</option>
                            <option value="2">Pessoa Jurídica</option>
                            <option value="3">Prestador de Serviços</option>
                        </select>
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
    <script type="text/javascript" src="../js/cadUser.js"></script>
    <script type="text/javascript" src="../js/showCadData.js"></script>
</body> 
</html>