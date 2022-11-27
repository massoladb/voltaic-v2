<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #navbar {
            background-color: #ffffff00;
        }
    </style>
    <title>Bem-vindo à Voltaic Technology</title>
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
        <section class="hero">
            <div class="leftSide" style="margin-top: 3rem;">
                <h1 class="heroText" id="heroText">Entre agora no mundo da <highlight>energia solar</highlight> como nunca antes!</p>
            </div>
            <div class="rightSide" style="margin-top: 3rem;">
                <div class="cad">
                    <div class="cadContent">
                        <h2 class="cadTitle">Cadastre-se e <highlight>realize uma solicitação</highlight> quando quiser!</h2>
    
                        <form action="cadastro.php" id="formCadIndex" class="cadForm">
                            <label for="emailInput" class="cadLabel">Email</label><br>
                            <input type="email" placeholder="voltaic@email.com" name="emailInput" class="cadInput" id="emailInput">
                            <label for="pswInput" class="cadLabel">Senha</label><br>
                            <input type="password" placeholder="✱✱✱✱✱✱✱✱" name="pswInput" class="cadInput" id="pswInput">

                            <div id="modalCad" class="modal">
                                <div class="modal-content">
                                    <span id="closeModal" class="close">&times;</span>
                                    <div class="modal-title">
                                        <h1>Como você deseja se cadastrar...</h1>
                                    </div>
                                    <div class="modal-card">
                                        <div class="user-card">
                                            <div class="user-card-title">Pessoa<br><highlight>Física</highlight></div>
                                            <div class="cad-card-text">Seja um usuário contratante de serviços</div>
                                            <button type="submit" class="btn card-btn" id="btnContinuePF">Continuar</button>
                                        </div>
                                        <div class="user-card">
                                            <div class="user-card-title">Pessoa<br><highlight>Jurídica</highlight></div>
                                            <div class="cad-card-text">Seja uma empresa contratante de serviços</div>
                                            <button type="submit" class="btn card-btn" id="btnContinuePJ">Continuar</button>
                                        </div>
                                        <div class="user-card">
                                            <div class="user-card-title">Prestador de <highlight>Serviços</highlight></div>
                                            <div class="cad-card-text">Seja uma empresa instaladora ou provedora</div>
                                            <button type="submit" class="btn card-btn" id="btnContinuePS">Continuar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button class="btn btnMargin" id="continueCad">Continuar cadastro</button>
                        <p class="cadLogin">Já tem uma conta? <a class="login" href="login.php">Faça login.</a></p>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="section-cards">
            <div class="topSide">
                <h2 class="title">Por que utilizar a nossa plaforma?</h2>
            </div>
            <div class="bottomSide">
                <div class="home-card">
                    <div class="cardContent">
                        <img class="card-check" src="../img/check.png" alt="check">
                        <h3 class="card-title">Conexão Direta</h3>
                            <p class="card-text">Usuários contratantes e provedores de serviço comunicam-se entre si de maneira prática</p>
                            <figure class="figureHome">
                            <img class="card-image" src="../img/conections.png" alt="Ícone de um conexões">
                        </figure>
                    </div>
                </div>
                <div class="home-card">
                    <div class="cardContent">
                        <img class="card-check" src="../img/check.png" alt="check">
                        <h3 class="card-title">Apoio ao Meio Ambiente</h3>
                        <p class="card-text">Contribua com a disseminação de uma das maiores fontes de energia limpa e sustentável</p>
                        <figure class="figureHome">
                            <img class="card-image" src="../img/meioambiente.png" alt="Ícone do planeta terra">
                        </figure>
                    </div>
                </div>
                <div class="home-card">
                    <div class="cardContent">
                    <img class="card-check" src="../img/check.png" alt="check">
                        <h3 class="card-title">Livre Escolha de Contato</h3>
                            <p class="card-text">Decida qual a melhor forma para se comunicar com provedores de serviços</p>
                        <figure class="figureHome">
                            <img class="card-image" src="../img/share.png" alt="Ícone de uma corrente quebrada">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-aboutUs">
            <div class="topSide abtTopSide">
                <div class="leftSide abtLeftSide">
                    <h2 class="title abtTitle">Sobre nós</h2>
                    <div class="aboutUs-text">Somos uma equipe de TCC do curso técnico em Desenvolvimento de Sistemas na Etec Drª Ruth Cardoso, composta por Bruno Santana, Felipe Massola, João Gabriel, José Felipe e Kattryel Rezende orientados pelos professores Charles Barros e Daniela Uebele.</div>
                </div>
                <div class="rightSide">
                    <img class="abtPic" src="../img/voltaic-equipe.jpg" alt="foto da equipe criadora da plataforma Voltaic Technology">
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
    <script type="text/javascript" src="../js/nav.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
    <script type="text/javascript" src="../js/getCadData.js"></script>
</body> 
</html>