
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- poppins fonts start  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- poppins fonts end  -->

    <link rel="stylesheet" href="style.css">
    <title>Admin Page Login</title>
</head>

<body>
    <header>
        <h1>Admin Page</h1>
    </header>
    <main>
        <section class="main-content">
            <form action="servidor.php" method="POST" autocomplete="off">
                <div class="title-form">
                    <h2>Login admin</h2>
                </div>
                <div class="data-collection">
                    <fieldset>
                        <div class="field-username">
                            <label for="username">Usuário</label>
                            <input id="username" name="username" type="text" required placeholder="Insira o seu nome de Usuário">
                        </div>
                        <div class="field-password">
                            <label for="password">Senha</label>
                            <input id="password" name="password" type="password" required placeholder="Insira a sua senha">
                        </div>
                    </fieldset>
                    <span>Esqueceu a senha?</span>
                    <button id="submit" type="submit">Entrar</button>
                    <p>Mantenha sua senha em segredo e não a compartilhe.</p>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer-content">
        <div class="flex">
            <div class="footer-informations">
                <h2>informações de desenvolvimento:</h2>
                <p>Desenvolvedor: <span>Lucas Sales</span> <br>
                    Periodo de Desenvolvimento: <span>18/04/2024 a 19/04/2024
                </p>
            </div>
            <div class="dev-footer">
                <h2>Lucas Sales</h2>
                <div class="redes-sociais">
                    <a href="https://www.instagram.com/lucas.rsc_/" target="_blank"><img src="assets/icons8-instagram-100 (2).png" alt="instagram logo footer"></a>

                    <a href="https://github.com/lucas6180" target="_blank"><img src="assets/icons8-github-100 (1).png" alt="github logo footer"></a>

                    <a href="https://www.linkedin.com/in/lucas-sales-a22007300/" target="_blank"><img
                            src="assets/icons8-linkedin-100 (1).png" alt="linkedin logo footer"></a>

                </div>
                © 2024 Lucas Sales
            </div>
            <div class="fill-visual-no-utility"></div>
        </div>
    </footer>
    <script src="scripts/login.js"></script>
</body>

</html>